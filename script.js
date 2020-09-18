document.getElementById("register1").onclick = function() 
{
    document.getElementById("page1").style.display = "block";
    document.getElementById("page2").style.display = "none";
}
document.getElementById("table").onclick = function() 
{
    document.getElementById("page1").style.display = "none";
    document.getElementById("page2").style.display = "block";
}
console.log("connected")