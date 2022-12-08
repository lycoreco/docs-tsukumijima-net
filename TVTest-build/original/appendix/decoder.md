# デコーダとレンダラ

TVTestで利用可能なデコーダとレンダラについて解説します。

## MPEG-2 デコーダ

以下のデコーダは動作が確認されています。

名前| 特記事項  
---|---  
[TVTest DTV Video Decoder](https://github.com/DBCTRADO/TVTestVideoDecoder)|
TVTest のフォルダに配置するとインストールせずに使えます。  
ATI MPEG Video Decoder  
AMD Video Decoder| インターレース解除などは、CCC で設定します。  
一部ノイズが出る場合があります。  
[DScaler Mpeg2 Video
Decoder](http://deinterlace.sourceforge.net/dscaler5.htm)| 2006年の Alpha
版で開発停止しています。  
[ffdshow Video Decoder](http://ffdshow-tryout.sourceforge.net/)| オリジナルの
ffdshow は2006年に開発停止、後継の ffdshow tryouts も既にほぼ開発停止しています。  
チャンネル切り替え時にノイズが出るなどの問題が出ることがあります。  
[LAV Video Decoder](https://github.com/Nevcairiel/LAVFilters)|
再生オフからオンに切り替えた時に映像が表示されません。  
その場合もう一度オフ・オンを繰り返してください。  
Microsoft MPEG-2 Video Decoder  
Microsoft DTV-DVD Video Decoder| Windows Vista 以降に付属しているデコーダです。  
Windows 8 以降では MPEG-2 のデコードは有料オプションです。  
MPV Decoder Filter  
MPC - MPEG-2 Video Decoder  
Mpeg2Dec Filter| Media Player Classic のデコーダとその派生デコーダです。  
[MPC-BE](https://sourceforge.net/projects/mpcbe/) の Standalone filters
から入手可能です。  
  
  
## レンダラ

以下の映像レンダラが利用できます。  
基本的に Vista 以降では EVR をお薦めします。

名前| 説明  
---|---  
システムデフォルト| システムのデフォルトレンダラ。通常古いレンダラが使われます。  
VMR7| DirectDraw 7 を使用したレンダラ。  
XP の標準的なレンダラです。  
VMR9| Direct3D 9 を使用したレンダラ。  
VMR7 Renderless| 特に選ぶ意味はありません。  
VMR9 Renderless| カスタム アロケータ プレゼンタを使用したVMR9。  
キャプチャが高速に行えます。  
EVR| Vista 以降用のレンダラ。  
ハードウェアによる再生支援やインターレース解除に必要です。  
EVR (Custom Presenter)| EVR のプレゼンタをカスタム実装したもの。EVR
で問題がある場合(マルチディスプレイ環境など)に試してください。  
Overlay Mixer| オーバーレイを使用した古いレンダラ。  
Vista で使用すると Aero が解除されます。  
[madVR](http://madvr.com/)| madVR がインストールされていれば利用できます。  
v0.24 以降でないとフリーズします。

