<template >
  <v-timeline >
    <v-timeline-item
      v-for="activity in activities"
      :key="activity.id"
      color="#3996d9"
      large
    >
      <template v-slot:opposite>
        <span>{{activity.created_at}}</span>
      </template>
      <v-card class="elevation-2" >
        <v-card-title class="headline">{{activity.causer_type}}</v-card-title>
        <v-card-text>{{activity.description}}</v-card-text>
      </v-card>
    </v-timeline-item>
  </v-timeline>
</template>
<script>
export default{
  data(){
    return{
    activities:[]
    }
  },
  mounted(){
    
    axios.get('http://127.0.0.1:8000/admin/activity').then(response=>(this.activities=response.data))

  }

}
</script>
