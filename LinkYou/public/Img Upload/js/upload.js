var feedback = function(res) {
    if (res.success === true) {
        var get_link = res.data.link.replace(/^http:\/\//i, 'https://');
        //document.querySelector('.status').classList.add('bg-success');
        
        document.getElementById('inputImg').innerHTML =
        '<input type="text" name="logo" autocomplete="off" class="el-input__inner" value=\"' + get_link + '\" style="width: 100%;display:none;">'
        document.getElementById('imagen').innerHTML =
        '<img class="img" name="logo" style="display:none;" src=\"' + get_link + '\"/>';
    }
};

new Imgur({
    clientid: '10dfd5b4ea228d8', //You can change this ClientID
    callback: feedback
});