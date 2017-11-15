

function noc(i) {

  var formy = document.getElementById('form'+i);
  var tekst = document.getElementById('tekst'+i);
  console.log('i wynosi'+i);
  formy.classList.toggle('noc');
  tekst.classList.toggle('noc');
  return (formy)

};
