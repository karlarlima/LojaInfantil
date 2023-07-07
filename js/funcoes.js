let selectCat = document.getElementById('categoria');

selectCat.onchange = () => {
let selectSub = document.getElementById('subcategoria');
let valor = selectCat.value;


fetch("cat_sub.php?subcat_id=" + valor)

    .then(response => {
    return response.text();

}). then(texto => {
    selectSub.innerHTML = texto;
});


}