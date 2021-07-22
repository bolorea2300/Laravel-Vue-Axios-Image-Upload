# Laravel-Vue-Axios-Image-Upload

## はじめに
**※画像は、『Storage』フォルダに保存するので、事前に『php artisan storage:link』のコマンドを入力してください。**

- **最低限の機能しか実装していません。**
- 一部のファイルしかないので、使用する場合は保存ではなくコピペを用いてください。
- **バリデーション等は一切していません。**
- バリデーション等を実装せずにこのまま使うと、**悪意のあるユーザーから、危険なファイルをアップロード**されてしまいます。

## 概要
Vue.jsとAxiosを用いてLaravelに「画面遷移を必要としない画像アップローダー」を実装しました。

画像は<a href="https://pixabay.com/ja/users/dendoktoor-14802912/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=6473967">dendoktoor</a>による<a href="https://pixabay.com/ja/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=6473967">Pixabay</a>からの画像

![GIF 2021-07-22 21-18-15](https://user-images.githubusercontent.com/86586028/126637971-0bc68f81-0073-424d-95ef-bb107ac3e98c.gif)

### 使い道
- ブログ等の記事作成
- SPA(シングルページアプリケーション)によるファイルアップローダー

など
