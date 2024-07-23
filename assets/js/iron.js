document.onkeydown = function (e) {
  if (e.ctrlKey && (e.keyCode === 80 || e.keyCode === 83 || e.keyCode === 85)) {
    return false
  }
  if (e.ctrlKey && e.shiftKey && e.which === 73) {
    e.preventDefault()
  } else {
    return true
  }
}
