import removeModules from './removeModules'
import findNodeDimensions from './findNodeDimensions'

const drawModules = async (learningpath, addNodes, removeNodes, findNode, draggedNode = null, deletedNodeId = null) => {
  if (learningpath.json.modules) {

    await removeModules(learningpath.json.tree, removeNodes)
    let allModules = []
    let userpath = false
    learningpath.json.modules.forEach( async module => {
      let newModule = {
        type: 'module',
        position: { x: 0 , y: 0 },
        label: `module node`,
        draggable: false,
        selectable: false,
        data: module
      }
      let insertModule = false
      let rightestNode = null
      let lowestNode = null
      newModule.id = module.id + '_module'

      let active = false
      learningpath.json.tree.nodes.forEach(node => {
        if (node.data.module == newModule.data.id &&
          deletedNodeId != node.id) {
            if (node.data.completion ) {
              userpath = true
              if (node.data.completion.singlerestrictionnode.length == 0) {
                active = true
              } else {
                for (let key in node.data.completion.singlerestrictionnode) {
                  if (node.data.completion.singlerestrictionnode[key]) {
                    active = true
                  }
                }
              }
            }

          insertModule = true
          if (draggedNode && draggedNode.id == node.id) {
            node.position = draggedNode.position
          }

          if (newModule.position.x == 0 || newModule.position.x > node.position.x) {
            newModule.position.x = node.position.x
          }
          if (rightestNode == null || rightestNode.position.x < node.position.x) {
            rightestNode = node
          }
          if (newModule.position.y == 0 || newModule.position.y > node.position.y) {
            newModule.position.y = node.position.y
          }
          if (lowestNode == null || lowestNode.position.y < node.position.y) {
            lowestNode = node
          }
        }
      })

      if (insertModule) {
        // Check if rightestNode and lowestNode are assigned values
        if (rightestNode && lowestNode) {
          if (userpath && !active) {
            newModule.data.opacity = '0.6'
            newModule.zIndex = 1
          } else {
            newModule.data.opacity = '0.2'
            newModule.zIndex = -10
          }
          let lowestNodeHeight = findNodeDimensions(lowestNode, findNode)
          if (lowestNode.dimensions) {
            lowestNodeHeight = lowestNode.dimensions.height
          }
          const height = Math.abs(newModule.position.y - lowestNode.position.y) + lowestNodeHeight + 40
          const width = Math.abs(newModule.position.x - rightestNode.position.x) + 440
          newModule.data.height = height + 'px'
          newModule.data.width = width + 'px'
          newModule.position.y -= 20
          newModule.position.x -= 20
        }
        allModules.push(newModule)
      } else {
        removeNodes([module.id + '_module'])
      }
    });
    addNodes(allModules)
  }
}

export default drawModules;
