const imgDiv= document.querySelector('.image');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const upload = document.querySelector('#upload');




imgDiv.addEventListener('mouseenter', function()
{
    upload.style.display = "block";
});

imgDiv.addEventListener('mouseleave', function()
{
    upload.style.display = "none";
});

file.addEventListener('change', function()
{
    const choosedFile = this.files[0];
    


    if(choosedFile)
    {
        const reader = new FileReader();

        reader.addEventListener('load', function()
        {
            img.setAttribute('src', reader.result);
        })

        reader.readAsDataURL(choosedFile);
        
    }

    //alert('Selected file: ' + this.value);
});







