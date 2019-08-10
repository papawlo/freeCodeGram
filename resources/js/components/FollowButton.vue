<template>
  <button
    class="btn btn-primary ml-4"
    @click="followUser"
    v-text="buttonText"
  >Follow</button>
</template>

<script>
export default {
  props: ['userId', 'follows'],
  mounted () {
    console.log('Component mounted.')
  },
  data: function () {
    return {
      status: this.follows,
    }

  },
  methods: {
    followUser () {
      axios.post('/follow/' + this.userId)
        .then(response => {
          this.status = !this.status;
          console.log(response.data);
        })
        .catch(errors => {
          if (errors.response.status == 401) {
            window.location = '/login';
          }
        });
    },
    // followUser () {
    //   axios.get('/follow/' + this.userId)
    //     .then(response => { console.log(response.data); })
    //     .catch((e) => {
    //       console.error(e)
    //     })
    // }
  },
  computed: {
    buttonText () {
      return (this.status) ? 'Unfollow' : 'Follow';
    }
  }
}
</script>
