function IsObjectHasNull(obj){
    for(let a of Object.values(obj)){
        if(a == null || a == '' || a == undefined){
            return true;
        }
    }

    return false;
}

function IsEmpty(value) {
    if (value instanceof Array) {
        for (var i = 0; i < value.length; i++) {
            if (value[i] === null || value[i] === '' || value[i] === undefined) {
                return true;
            }
            else {
                if (value[i].toString().toLowerCase() === 'invalid date') {
                    return true;
                }
            }
        }
    }
    else if (value instanceof Object) {
        for (var i in value) {
            if (value[i] === null || value[i] === '' || value[i] === undefined) {
                return true;
            }
            else {
                if (value[i].toString().toLowerCase() === 'invalid date') {
                    return true;
                }
            }
        }
    }
    else {
        if (value === null || value === '' || value === undefined) {
            return true;
        }
        else {
            if (value.toString().toLowerCase() === 'invalid date') {
                return true;
            }
        }
    }

    return false;
}

function Notify(message, type, duration) {
    var colors = {
        success: '#4caf50',
        warning: '#ff5722',
        danger: '#ff5252',
        info: '#03a9f4'
    };

    var icons = {
        success: '<i class="fa fa-check-circle"></i>',
        warning: '<i class="fa fa-exclamation-circle"></i>',
        danger: '<i class="fa fa-exclamation-triangle"></i>',
        info: '<i class="fa fa-info-circle"></i>',
        default: '<i class="fa fa-thumbs-up"></i>'
    };
    
    Snackbar.show({
        text: message,
        backgroundColor: colors[type],
        duration: IsEmpty(duration) ? 4000 : duration,
        pos: 'top-right',
        actionTextColor: 'white',
        icon: icons[IsEmpty(type) ? 'default': type]
    });
}