$(function() {
    $('#q').click(function() {
        document.getElementById('ans1').style.display = 'block';
        document.getElementById('ans2').style.display = 'none';
        document.getElementById('ans3').style.display = 'none';
    })

    $('#q2').click(function() {
        document.getElementById('ans1').style.display = 'none';
        document.getElementById('ans2').style.display = 'block';
        document.getElementById('ans3').style.display = 'none';
    })

    $('#q3').click(function() {
        document.getElementById('ans1').style.display = 'none';
        document.getElementById('ans2').style.display = 'none';
        document.getElementById('ans3').style.display = 'block';
    })
});