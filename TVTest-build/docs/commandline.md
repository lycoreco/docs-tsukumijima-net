# コマンドライン

以下のコマンドラインオプションが使用できます。

※複数あるものはどちらでも可。/ の代わりに - でも可。


|動作一般||
|---|---|
/ini| INI ファイル名の指定 (e.g. /ini TVTest2.ini)  
/init| [初期設定ダイアログ](initialsettings.md)を表示する  
/inikey| INI ファイルの設定値を上書きする<br>[セクション]名前=値 の形式で指定します。セクションを省略すると [Settings] が指定されたとみなされます。<br>>(e.g. /inikey [Settings]AlwaysOnTop=yes)<br>(e.g. /inikey "Mpeg2Decoder=Hoge MPEG-2 Decoder")  
/log| 終了時にログを保存する  
/silent| エラー時にダイアログを表示しない  
/s| TVTest が既に起動している場合、複数起動しない  
/standby| 待機状態で起動する  
/nd| TSプロセッサーを無効にする  
/plugindir| プラグインの読み込み元フォルダ (e.g. /plugindir Plugins2)  
/noplugin| プラグインを読み込まない  
/plugin-| 指定されたプラグインを読み込まない (e.g. /plugin- Equalizer.tvtp)  
/home| ホーム画面を表示する  
/chdisplay| チャンネル選択画面を表示する  

|チューナー/チャンネル||
|---|---| 
/d| BonDriver の指定 (e.g. /d BonDriver.dll)  
/nodriver| BonDriver を読み込まない  
/ch| チャンネルの指定(物理チャンネル番号) (e.g. /ch 13)  
/rch| チャンネルの指定(リモコンチャンネル番号) (e.g. /rch 3)  
/chspace| チューニング空間の指定(BonDriver でのインデックス) (e.g. /chspace 1)  
/sid| サービスIDの指定 (e.g. /sid 1024)  
/nid| ネットワークIDの指定 (e.g. /nid 32736)  
/tsid| トランスポートストリームIDの指定 (e.g. /tsid 32736)  
/nr| ネットワークリモコンを使用する  
/port /p| BonDriver_UDP/TCP のポート番号 (e.g. /port 1234)  
/1seg| ワンセグモードにする  

|ウィンドウ||
|---|---|   
/fullscreen /f| 全画面表示  
/min| 最小化状態で起動する  
/max| 最大化状態で起動する  
/tray| タスクトレイに格納した状態で起動する  
/posx| ウィンドウの左位置の指定 (e.g. /posx 100)  
/posy| ウィンドウの上位置の指定 (e.g. /posy 80)  
/width| ウィンドウの幅の指定 (e.g. /width 1920)  
/height| ウィンドウの高さの指定 (e.g. /height 480)  
  
|再生||
|---|---|  
/noview| 起動時画面表示オフ  
/nodshow| 起動時に DirectShow を初期化しない<br>視聴せずに録画のみ行う場合に指定すると、メモリ使用量がなかり減ります。<br>メニューの[再生オフ]のチェックを外せば、途中から視聴することも可能です。  
/volume| 音量を指定する(0から100まで) (e.g. /volume 50)  
/mute| 消音にする  
/mpeg2| MPEG-2 の再生を有効にする  
/h264| H.264 の再生を有効にする  
/h265| H.265 の再生を有効にする  

|録画||
|---|---|
/rec| 起動時録画開始  
/reccurservice| 現在のサービスのみ録画する  
/recstarttime| 録画開始日時<br>年/月/日-時:分:秒 の形式で指定します。<br>日付のみ、または時刻のみを指定することもできます。<br>年、月、秒は省略できます。時間は24以上の値を指定できます。<br>(e.g. /recstarttime 2011/2/1-3:30:00)<br>(e.g. /recstarttime 25:30)  
/recdelay| 録画開始までの時間(秒単位) (e.g. /recdelay 60)<br>h/m/s で 時間/分/秒 を指定することも可能です。詳細は /recduration の説明を参照してください。  
/recduration| 録画時間(秒単位) (e.g. /recduration 1800)<br>数字の後に h/m/s があるとそれぞれ 時間/分/秒 の指定になります。<br>その際複数指定することもできますが、途中でスペースなどは入れずに連続して記述してください。<br>(e.g. /recduration 30m) (e.g. /recduration 1h20m30s)  
/recexit| 録画終了時にプログラムを終了  
/recfile| 録画ファイル名 (e.g. /recfile "C:\ReocrdFiles\Record.ts")  
/recstop| 録画停止  
  
|EPG||
|---|---|
/noepg| EPG 情報の取得を行わない<br>番組表などは表示できなくなります。  
/epg| EPG 番組表を表示する  
/epgonly| EPG 番組表のみ表示する<br>番組表を閉じると終了します(視聴や録画を行っている場合を除く)。  
/epgtuner| EPG 番組表のデフォルトの BonDriver の指定 (e.g. /epgtuner BonDriver_Hoge.dll)<br>favorites にするとお気に入りチャンネルの番組表  
/epgspace| EPG 番組表のデフォルトチューニング空間の指定 (e.g. /epgspace 1)  
  
## おまけ

udp://@:1234 のようなポート指定も有効です(なぜかこう指定すると思っている人が多いので)。

