// 表示非表示のtoggleボタン
let toggleBtn = document.querySelector('.btn-toggle')
let playerList = document.querySelector('.playerlist')

toggleBtn.addEventListener('click', () => {
  playerList.classList.toggle('is-active')
})
