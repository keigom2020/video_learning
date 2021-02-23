<template>
  <!-- <div>
    
  </div> -->
  <div class="mx-auto">
    <!-- <button
      type="button"
      class="btn m-0 p-1 shadow-none"
    >
      <i class="fas fa-heart mr-1"
      />
    </button>
    10 -->

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
    }
  },
}
</script>

<style>
  
</style>