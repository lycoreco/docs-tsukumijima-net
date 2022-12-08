# スタイルファイル

スタイルファイルは、各部の大きさなどを設定するファイルです。  
デフォルトのファイル名は TVTest.style.ini です。

## 設定項目

設定できる項目は多数存在しますが、その中で特殊なもの、有用なものを説明します。

設定名| 説明  
---|---  
program-guide.header.shadow.height| EPG 番組表の上部の影の高さです。0にすると影がなくなります  
program-guide.event.line-spacing| EPG 番組表の行間です。  
osd.text-size-ratio| OSD 表示の文字の大きさを、画面の幅の何分の1にするか指定します。  
osd.composite-text-size-ratio| OSD 表示を映像と合成する場合の文字の大きさを、画面の幅の何分の1にするか指定します。  
channel-osd.logo.effect| チャンネル変更時に表示される局ロゴの表示効果を設定します。  
"gloss" でテカリ効果、空 "" で効果なしになります。  
channel-osd.animation| チャンネル変更時の OSD をアニメーションさせる場合は true、させない場合は false を指定します。  
display.text-size-ratio.horz  
display.text-size-ratio.vert|
ホーム/チャンネル選択画面の文字サイズを画面に合わせる場合の文字の大きさを、画面の幅と高さの何分の1にするかで設定します。  
幅と高さのうち小さい方のサイズが実際に反映されます。  
display.text-size-scale-base| ホーム/チャンネル選択画面の文字の大きさを画面の大きさから求める際のスケールを調整します。  
数値を大きくするほど画面サイズが大きい場合の文字サイズが小さめになります。  
0にすると画面サイズと文字サイズが比例します。  
display.text-size-min| ホーム/チャンネル選択画面の文字の大きさの最小サイズを設定します。  
display.text-size-max| ホーム/チャンネル選択画面の文字の大きさの最大サイズを設定します。

