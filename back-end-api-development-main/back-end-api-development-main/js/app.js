// Highlight code
hljs.highlightAll();

// Key listener to toggle code using key press
document.onkeypress = function (e) {
    if(e.key == 'c')
    {
    	document.querySelector('.toggle-code').click();
    }
};