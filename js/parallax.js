
// console.log("the Parallax script has loaded")
function parallax(){
	var prlx_lyr_1 = document.getElementById('prlx_lyr_1');
	var prlx_lyr_2 = document.getElementById('prlx_lyr_2');
	prlx_lyr_1.style.top = -(window.pageYOffset / 4)+'px';
	// prlx_lyr_2.style.top = -(window.pageYOffset / 8)+'px';
}
window.addEventListener("scroll", parallax, false);

