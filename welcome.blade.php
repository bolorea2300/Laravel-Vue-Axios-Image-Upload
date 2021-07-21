<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>画像アップローダー</title>
</head>

<body>
    <div id="app">
        <input v-if="uploader" type="file" accept="image/*" ref="input" @change="uploadimage()" />
        <!-- アップロードした画像を表示 -->
        <img v-if="image" :src="image" class="preview" />
        <!-- アップロードした画像をaxiosからLaravelに渡し、保存する。-->
        <input type="button" value="投稿する" @click="post">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- /publicフォルダにjsフォルダを作り格納。 -->
    <script src="{{ asset('/js/javascript1.js') }}"></script>

</body>

</html>
