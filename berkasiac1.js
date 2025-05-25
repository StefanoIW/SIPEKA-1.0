function handleFileSelectAC1(event) {
    const file = event.target.files[0];
    console.log(file)

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            localStorage.setItem('draftImageAC1', e.target.result);
            localStorage.setItem('draftImageNameAC1', file.name);
        }
        reader.readAsDataURL(file);
    }
}

window.onload = function() {
    const draftImage = localStorage.getItem('draftImageAC1');
    const draftImageName = localStorage.getItem('draftImageNameAC1');
    if (draftImage && draftImageName) {
        const fileInput = document.getElementById('berkasiac1');
        fileInput.value = ''; 
        const file = dataURLtoFile(draftImage, draftImageName);
        const fileList = new DataTransfer(); 
        fileList.items.add(file); 
        fileInput.files = fileList.files; 
    }
};

function dataURLtoFile(dataurl, filename) {
    var arr = dataurl.split(','), 
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]), 
        n = bstr.length, 
        u8arr = new Uint8Array(n);
    while(n--){
        u8arr[n] = bstr.charCodeAt(n);
    }
    return new File([u8arr], filename, {type:mime});
}