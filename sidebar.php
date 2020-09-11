<div class="sidebarDoc">
    <div class="title">
        <img src="./assets/img/Logo-horizontal.svg" alt="" srcset="">
    </div>

    <input type="text" id="mySearch" onkeyup="searchMenu()" placeholder="Search.." title="Type in a category">

    <div class="sidebarNav">
        <button class="accordion">Section 1</button>
        <div class="panel">
            <ul id="myMenu">
                <li><a href="#">Menu1</a></li>
                <li><a href="#">Menu2</a></li>
                <li><a href="#">Menu3</a></li>
                <li><a href="#">Menu4</a></li>
                <li><a href="#">Menu5</a></li>
                <li><a href="#">Menu6</a></li>
            </ul>
        </div>

        <button class="accordion">Section 2</button>
        <div class="panel">
            <ul id="myMenu">
                <li><a href="#">Menu7</a></li>
                <li><a href="#">Menu8</a></li>
                <li><a href="#">Menu9</a></li>
                <li><a href="#">Menu10</a></li>
                <li><a href="#">Menu11</a></li>
                <li><a href="#">Menu12</a></li>
            </ul>
        </div>

        <button class="accordion">Section 3</button>
        <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
function searchMenu() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>