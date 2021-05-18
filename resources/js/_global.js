export default class Global {
    initialize() {
        this.changeImgHandler();
    }

    changeImgHandler() {

        let inputAvatar = document.getElementById('inputAvatar');
        let avatarUpdate = document.getElementById('avatarUpdate');

        if (inputAvatar == null) {
            return;
        }

        

        inputAvatar.onchange = function () {
            if (inputAvatar.files && inputAvatar.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    avatarUpdate.style.backgroundImage = "url('"+e.target.result+"')";
                    avatarUpdate.setAttribute('src', e.target.result);
                };
                reader.readAsDataURL(inputAvatar.files[0]);
            }
        }

    }
}