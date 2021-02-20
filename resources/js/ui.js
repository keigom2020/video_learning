// 表示非表示のtoggleボタン
const toggleBtn = document.querySelector('.btn-toggle')
const playerList = document.querySelector('.playerlist')

toggleBtn.addEventListener('click', () => {
  playerList.classList.toggle('is-active')
})
