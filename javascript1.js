var app = new Vue({
    el: '#app',
    data: {
        uploader:true,
        data:"",
        image:""
    },
    methods: {
        uploadimage() {
            //アップロード用の画像データ
            this.data  = this.$refs.input.files[0];
            //表示用の画像
            this.image = URL.createObjectURL(this.data);
        },

        //axiosによるアップロード
        post() {
            let formData = new FormData();
            formData.append("data", this.data);

            let config = {
                headers: {
                    "content-type": "multipart/form-data"
                }
            };

            axios
                .post("/upload", formData, config)
                .then(res => {
                    alert("投稿に成功しました!");
                    //投稿に成功したらリセット
                    this.image = "";
                    this.data = "";
                    this.reset();
                })
                .catch(function() {
                    alert("投稿に失敗しました。");
                });
        },

        reset () {
            //フォームに格納されたファイルを削除する。
            //v-ifは、falseになると「削除された扱い」になるらしい。
            this.uploader = false
            this.$nextTick(function () {
                this.uploader = true
            })
        }
    },
})