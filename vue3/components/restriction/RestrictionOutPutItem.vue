<template>
  <div class="col 12 mt-2">
    <div 
      v-for="output_item in output_items"
      :key="output_item"
    >
      <component 
        :is="getOutputLabel(output_item)" 
        v-model="data.manualrestrictionvalue" 
        :data="data"
      />
    </div>
  </div>
</template>

<script setup>
import manual_output from './conditions_output/manual_output.vue'

const props = defineProps({
  data: {
    type: Object,
    required: true,
  }
});
const output_items = ['manual'];

const dynamicComponent = (output_item) => {
  switch (output_item) {
    case 'manual':
      return manual_output;
    default:
      return null;
  }
};

const getOutputLabel = (output_item) => {
  if (props.data) {
    return dynamicComponent(output_item)
  }else{
    return null;
  } 
};

</script>
