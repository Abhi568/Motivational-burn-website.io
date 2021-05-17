back1 = () => {
    const search_bar_content = document.getElementById("search").value.toUpperCase();
    console.log(search_bar_content);
    paragraph = document.getElementsByClassName("section");
    heading = document.getElementsByClassName("headings");

    for (var i = 1; i <=heading.length; i++) {
        var main_data_search_name = paragraph[i].getElementsByTagName('p')[0].innerText;


        if (main_data_search_name) {
            console.log('data',main_data_search_name)
            if (main_data_search_name.toUpperCase().search(search_bar_content) > -1) {
                console.log("found");
                paragraph[i].style.display = ""
            }
            else {
                paragraph[i].style.display = "none";
                console.log("not");
            }
        }
    }

}
    
// myFunction=()=> {
//     var person = prompt("Please enter your name", "Abhishek");
//     if (person != null) {
    
//       document.getElementById("demo").innerHTML = person+" has Liked";
//     }
//   }
// function back11()
// {

// }

// console.log("hjh");