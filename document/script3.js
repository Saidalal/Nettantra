let input = document.querySelector('input');
let span = document.querySelector('span');
input.addEventListener('change', () => {
   let files = input.files;
   
   if(files.length > 0) {
    if(files[0].size > 10 * 1024){
        span.innerText = 'File Size Exceeds 4mb';
        return;
    }
   }
   span.innerText = '';
})
function myFunction() {
    var x = document.getElementById("myFile").multiple;
    document.getElementById("demo").innerHTML = x;
    
}