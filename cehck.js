const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".image");

window.onload = ()=>{ // once window loaded

    //when user clicked on filterItem div
    filterItem.onclick = (selectedItem) =>{
        //if user click element has .item class
        
        if(selectedItem.target.classList.contains("item")){
            console.log(selectedItem.target.classList.contains("item"));
            //remove the active class which is in the first element 
            filterItem.querySelector(".active").classList.remove("active");
            //add that active class on the user selected element or item
            selectedItem.target.classList.add("active");
            let filterName = selectedItem.target.getAttribute("data-name");
            filterImg.forEach(function(image){
                let filterImages = image.getAttribute("data-name");
                if(filterName == filterImages || filterName=='all'){
                    image.classList.remove("hide");
                    image.classList.add("show");
                }else{
                    image.classList.add("hide");
                    image.classList.remove("show");
                }
            });
        }
    }
}