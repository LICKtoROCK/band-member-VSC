function check(){
    if(prefectures.value == "" || pr.value == "" ){
        alert("都道府県と自己ＰＲは必須項目です。");
        return false;
    }else{
        return true;
    }
}
