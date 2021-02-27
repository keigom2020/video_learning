<template>
  <!-- <div>
    
  </div> -->
  <div class="mx-auto">

    <div
      class="btn btn-info state-change-btn"
      @click="stateButton"
    >
      <p>視聴済みにする</p>
    </div>
  </div>
  
</template>

<script>
export default {
  // name: 'BrowsingHistory',
  // メソッドの実行
  // created() {
  // },

  // メソッドで使う&テンプレート内で使う変数を定義
  data() {
    return {
      state_button:'',
    }
  },
  // (読み込み時に)実行するメソッド
  methods: {
    stateButton() {
      var video = {
        'state_button': this.state_button,
      };
      var id = 1;
      axios.post('/api/video/' + id,video).then(res => {
        console.log(res.data.state_button);
      });

      // axios.post('/tweet', {
      //   tweet: this.tweet
      // })
      // .then(function (response) {
      //   console.log(response);
      // })
      // .catch(function (error) {
      //   console.log(error);
      // });
      // https://kumatetsublog.com/shoot/blog/laravel-ajax-vue-axios
    }
  },
}
</script>

<style>
  
</style>