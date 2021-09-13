let canViewMenu = false;

function openModal(){
    var modal = document.getElementById("myModal");
    if (modal){
      modal.style.display = "block";
    }
  }
  
  function closeModal(){
    var modal = document.getElementById("myModal");
    if (modal){
      modal.style.display = "none";
    }
  }
  
  function myFunction() {
    canViewMenu = !canViewMenu;
    var x = document.getElementById("menu");
    
    if (!!canViewMenu) {
      x.style.display = 'block';
    } else {
      x.style.display = 'none';
    }
  }