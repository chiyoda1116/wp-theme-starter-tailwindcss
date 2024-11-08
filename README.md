# javascript runtimeを導入

Bunをインストールしている前提で、Tailwind CSSを導入します。

## node.jsをインストール

[node.js](https://nodejs.org/)のサイトを参照

## bunをインストール

[bun](https://bun.sh/)のサイトを参照

# Tailwind CSSを導入

Bunをインストールしている前提で、Tailwind CSSを導入します。

## Tailwind CSSをインストール

```sh
bun add -D tailwindcss
```

## Tailwind CSSを初期化

```sh
npx tailwindcss init
```

## tailwind.config.jsを変更

```diff js:tailwind.config.js
  /** @type {import('tailwindcss').Config} */
  module.exports = {
-   content: [],
+   content: ["./**/*.php"],
    theme: {
      extend: {},
    },
    plugins: [],
  };
```

## input.cssを作成

cssディレクトリに、input.cssを作成して、以下のコードを追加

```css:css/input.css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

## input.cssから、tailwind.cssを出力

CLIツールを実行して、input.cssから、tailwind.cssをファイル名にしてCSSをビルドします。
また、watchオプションで、ウォッチモードを有効にします。
このオプションを指定すると、input.cssファイルに変更があった場合、自動的に再ビルドされます。
テーマを開発中に実行しておくと便利です。

```sh
npx tailwindcss -i ./css/input.css -o ./css/tailwind.css -m --watch
```

### コマンドの詳細

- npx: Node.jsのパッケージを実行するためのコマンド。  
  ここでは、Tailwind CSS CLIツールを実行しています。
- tailwindcss: 実行するコマンド。  
  Tailwind CSSのビルドプロセスを開始します。
- -i ./css/input.css: 入力ファイルを指定します。  
  ここでは、cssディレクトリ内のinput.cssが入力ファイルです。
- -o ./css/tailwind.css: 出力ファイルを指定します。  
  生成されたCSSは、cssディレクトリ内のtailwind.cssとして保存されます。
- -m: ミニファイオプション。  
  生成されるCSSファイルを圧縮して、ファイルサイズを小さくします。
- --watch: ウォッチモードを有効にします。  
  このオプションを指定すると、input.cssファイルに変更があった場合、自動的に再ビルドされます。
