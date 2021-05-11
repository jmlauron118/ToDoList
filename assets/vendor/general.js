function IsObjectHasNull(obj){
    for(let a of Object.values(obj)){
        if(a == null || a == '' || a == undefined){
            return true;
        }
    }

    return false;
}

function isEmpty(value){
    if (value == null || value.toString().toLowerCase() == 'null' || value == '' || value.toString().toLowerCase() == undefined) {
        return true;
    } else {
        return false;
    }
}