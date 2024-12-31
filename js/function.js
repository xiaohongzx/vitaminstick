// language dropdown
window.addEventListener('click', () =>
{
    const lang = document.querySelector('.subheader .language');
    lang.classList.remove('active');
})
function toggleLang(event)
{
    const lang = document.querySelector('.subheader .language');
    if(lang.classList.contains('active'))
    {
        lang.classList.remove('active');
    }   
    else
    {
        lang.classList.add('active');
    }
    event.stopPropagation();
}