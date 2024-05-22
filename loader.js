

function loadNewPage(url) {
    document.getElementById('loader').style.display = 'flex';
    document.getElementById('content').style.display = 'none';

    setTimeout(function() {
        window.location.href = url;
    }, 3000); // Show loader for 3 seconds
}

// Hide loader and show content after a delay when the page loads
window.onload = function() {
    setTimeout(function() {
        document.getElementById('loader').style.display = 'none';
        document.getElementById('content').style.display = 'block';
    }, 1500); // Show loader for 1.5 seconds on initial load
};