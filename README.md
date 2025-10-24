# IMTestAI

Masayuki Nii (msyk@nii.ac)

INTER-Mediatorのビデオ解説で利用するプロジェクトで、Windsurfが生成したINTER-Mediatorを利用するWebアプリケーションです。

このアプリケーションの生成方法、つまり生成させた時の操作については以下のビデオで紹介しています。

https://www.youtube.com/watch?v=NtBB5h99HEg

Windsurfが生成した状態を確認したい場合は、windsurf_generatedというブランチを確認してください。
このブランチで、以下のようにコマンドを実行すると、アプリケーションが起動します。いずれのコマンドも、Windsurfでスクラッチから生成させた時には自動的に入力されるコマンドです

```
git clone git@github.com:msyk/IMTestAI.git -b windsurf_generated
cd IMTestAI
composer install
sqlite3 addressbook.db < create_addressbook.sql
sqlite3 addressbook.db < sample_data.sql
php -S localhost:9080
```

この後、ブラウザ等で、「 https://localhost:9080/app.html 」にアクセスすると、アプリケーションを利用できます。

## コメント

このREADME.mdファイルは、Windsurfが生成したものではなく、後から付け足したものです。

INTER-Mediatorの公式サイトは以下の通りです。

https://www.inter-mediator.org/
