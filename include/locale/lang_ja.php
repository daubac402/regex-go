<?php
class CurrentLanguage
{
	const LANG = [
		'Regular Expression' => '正規表現'
		,'Test String' => '文字列'
		,'Expression Flags' => '表現フラグ'
		,', ' => '、'
		,'ignore case' => '大文字小文字を無視'
		,'global' => 'グローバル'
		,'multiline' => '複数行'
		,'ERROR: ' => 'エラー：'
		,'flags' => 'フラグ'
		,'no match' => '一致しません'
		,'match' => '一致'
		,'es' => ''
		,'infinite' => '無限'
		,'The expression can match 0 characters, and therefore matches infinitely.' => '式は0文字に一致するため、無限に一致します。'
		,'open' => 'オープン'
		,'Indicates the start of a regular expression.' => '正規表現の開始を示します。'
		,'close' => 'クローズ'
		,'Indicates the end of a regular expression and the start of expression flags.' => '正規表現の終了と式の開始フラグを示します。'
		,'global search' => 'グローバル検索'
		,'Retain the index of the last match, allowing iterative searches.' => '最後の一致のインデックスを保持し、反復検索を許可します。'
		,'Retain the index of the last match, allowing subsequent searches to start from the end of the previous match.<p>Without the global flag, subsequent searches will return the same match.</p><hr/>RegExr only searches for a single match when the global flag is disabled to avoid infinite match errors.' => '最後の一致のインデックスを保持します。これにより、前回の一致の最後から検索を開始できます。<p>グローバルフラグがなければ、その後の検索で同じ一致が返されます。</p><hr/>正規表現は、無限の一致エラーを避けるためにグローバルフラグが無効の場合にのみ、1つの一致を検索します。'
		,'Makes the whole expression case-insensitive.' => '式全体を大文字と小文字を区別させません。'
		,'Beginning/end anchors (<b>^</b>/<b>$</b>) will match the start/end of a line.' => '開始/終了アンカー (<b>^</b>/<b>$</b>) 行の開始/終了と一致します。'
		,'When the multiline flag is enabled, beginning and end anchors (<code>^</code> and <code>$</code>) will match the start and end of a line, instead of the start and end of the whole string.<p>Note that patterns such as <code>/^[\\s\\S]+$/m</code> may return matches that span multiple lines because the anchors will match the start/end of <b>any</b> line.</p>' => 'マルチラインフラグが有効な場合、アンカーの開始と終了 (<code>^</code> and <code>$</code>) 文字列全体の開始と終了ではなく、行の開始と終了に一致します。<p>パターンといった <code>/^[\s\S]+$/m</code> アンカーが任意の行の開始/終了と一致するため、複数の行にまたがる一致を返すことがあるご了承ください。'
		,'character' => '文字'
		,'Matches a {{getChar()}} character (char code {{code}}).' => '文字 {{getChar()}} (charコード {{code}})を一致します。'
		,'beginning' => '始まり'
		,'Matches the beginning of the string, or the beginning of a line if the multiline flag (<code>m</code>) is enabled.' => '複数行フラグ (<code>m</code>) が有効な場合は、文字列の先頭または行の先頭に一致します。'
		,'end' => '終わり'
		,'Matches the end of the string, or the end of a line if the multiline flag (<code>m</code>) is enabled.' => '複数行フラグ（<code>m</code>）が有効な場合は、文字列の終わりまたは行の終わりに一致します。'
		,'Character classes' => '文字クラス'
		,'any character except newline' => '改行以外の1文字'
		,'word, digit, whitespace' => 'アルファベットか数字かアンダースコア1文字、番号（[0-9]と同じ）、空白1文字 （[　\r\t\n\f\v] と同じ）'
		,'not word, digit, whitespace' => 'アルファベット、数字、アンダースコア以外の1文字、番号以外　（[^0-9]と同じ）、空白以外1文字　（[^ \r\t\n\f\v] と同じ）'
		,'any of a, b, or c' => 'a,b,c いずれかの1文字'
		,'not a, b, or c' => 'a,b,c以外の1文字'
		,'character between A & g (A, B, .., Z, a, b, .., g)' => '「A」から「g」まで1文字'
		,'Anchors' => 'アンカー'
		,'start / end of the string' => '文字列の開始/終了'
		,'word boundary' => '単語境界'
		,'Matches a word boundary position such as whitespace, punctuation, or the start/end of the string.' => '空白、句読点、または文字列の開始/終了などの単語境界位置に一致します。'
		,'not word boundary' => '単語境界以外'
		,'Matches any position that is not a word boundary.' => '単語の境界ではない任意の位置に一致します。'
		,'Escaped characters' => 'エスケープ文字'
		,'escaped . * \ ' => '. * \ をエスケープします'
		,'tab, linefeed, carriage return' => 'タブ、改行、復帰'
		,'unicode escaped' => 'ユニコード文字'
		,'Groups & Lookaround' => 'グループ'
		,'capture group' => 'グループ化'
		,'backreference to group #1' => '1番目グループを参照します'
		,'non-capturing group' => '結果の中にグループ化しません'
		,'positive lookahead' => '肯定的先読み'
		,'negative lookahead' => '否定的先読み'
		,'positive lookbehind' => '肯定的後読み'
		,'negative lookbehind' => '否定的後読み'
		,'atomic group' => 'アトミックなグループ'
		,'(not supported in Javascript)' => '（Javascriptではサポートされていません）'
		,'Quantifiers & Alternation' => '欲張りと繰り返し'
		,'match 0 or more times' => '直前の文字を0回以上繰り返す'
		,'match 1 or more times' => '直前の文字を1回以上繰り返す'
		,'match 0 or 1 time only' => '直前の文字を0回または1回繰り返す'
		,'match exactly five times' => '直前の文字を5回繰り返す'
		,'match two or more times' => '直前の文字を2回以上繰り返す'
		,'match between one and three times' => '直前の文字を1〜3回繰り返す'
		,'(greedy)' => '（欲張り）'
		,'(lazy)' => '（非欲張り）'
		,'match ab or cd' => '「ab」または「cd」選択します'
		,'RegexGo is a tool to learn, build, & test Regular Expressions (by Javascript)' => 'RegexGoは正規表現を学習、構築、テストすることができる。'
		,'Results update in <b>real-time</b> as you type' => '入力時に<b>リアルタイム</b>で結果を更します。'
		,'<b>Roll over</b> a match or expression for details' => '詳細するのために正規表現の文字を<b>ホバー</b>します。'
		,'<b>Undo</b> & <b>Redo</b> with Ctrl-Z / Y' => '<b>Undo</b>と<b>Redo</b>したい時Ctrl-Z / Yで使う。'
		,'dot' => '点'
		,'Matches any character except line breaks.' => '改行以外のすべての文字。'
		,'word' => '単語'
		,'Matches any word character (alphanumeric & underscore).' => '記号や空白ではない文字すべて。'
		,'digit' => '数字'
		,'Matches any digit character (0-9).' => '数字（０〜９）。'
		,'whitespace' => '空白'
		,'Matches any whitespace character (spaces, tabs, line breaks).' => 'タブや改行など、空白類とされる文字。'
		,'not word' => '単語ではない'
		,'Matches any character that is not a word character (alphanumeric & underscore).' => '記号や空白ではない文字以外。'
		,'not digit' => '数字ではない'
		,'Matches any character that is not a digit character (0-9).' => '数字以外（０〜９）。'
		,'not whitespace' => '空白ではない'
		,'Matches any character that is not a whitespace character (spaces, tabs, line breaks).' => 'タブや改行など、空白類とされる文字以外。'
		,'character set' => '文字セット'
		,'Match any character in the set.' => 'セット内の任意の文字にマッチします。'
		,'negated set' => 'ネゲートセット'
		,'Match any character that is not in the set.' => 'セット内以外の文字。'
		,'range' => '範囲'
		,'Matches a character in the range {{getChar(prev)}} to {{getChar(next)}} (char code {{prev.code}} to {{next.code}}).' => '{{getChar(prev)}}〜{{getChar(next)}}（charコード {{prev.code}}〜{{next.code}}）の1文字をマッチします。'
		,'Range values reversed. Start char is greater than end char.' => '範囲の値が逆になりました。 開始文字は終了文字よりも大きい。'
		,'Escaped character.' => 'エスケープ.'
		,'TAB' => 'タブ'
		,'LINE FEED' => '改行（LF）'
		,'CARRIAGE RETURN' => '復帰（CR）'
		,'unicode escape' => 'unicode escape'
		,'Unicode escaped character in the form <code>\\uFFFF</code>.' => '<code>\\\\uFFFF</code>からユニコードエスケープします。'
		,'capturing group' => 'グループ'
		,'Groups multiple tokens together and creates a capture group for extracting a substring or using a backreference.' => '複数のトークンをグループ化し、部分文字列を抽出するか、逆参照を使用するための取得グループを作成します。'
		,'control character escape' => '制御文字'
		,'Escaped control character in the form <code>\\cZ</code>.' => '制御文字（<code>\\\\cZ</code>）をエスケープします。'
		,'FORM FEED' => 'フォームフィード'
		,'form feed' => 'フォームフィード'
		,'VERTICAL TAB' => '垂直タブ'
		,'vertical tab' => '垂直タブ'
		,'octal escape' => '8進数エスケープ'
		,'Octal escaped character in the form <code>\\000</code>.' => '<code>\\\\000</code> 8進数エスケープ文字。'
		,'hexadecimal escape' => '16進数エスケープ'
		,'Hexadecimal escaped character in the form <code>\\xFF</code>.' => '<code>\\\\xFF</code> 16進数エスケープ文字。'
		,'backreference' => '逆参照'
		,'Matches the results of capture group #{{group.num}}.' => '{{group.num}}番目グループに一致します。'
		,'backreference to group #1' => '1番目グループを逆参照'
		,'non-capturing group' => '非キャプチャグループ'
		,'Groups multiple tokens together without creating a capture group.' => 'キャプチャグループを作成せずに複数のトークンをグループ化します。'
		,'Matches a group after the main expression without including it in the result.' => '結果にそれを含めずにメインの式の後のグループに一致します。'
		,'Specifies a group that can not match after the main expression (if it matches, the result is discarded).' => 'メイン式の後に一致しないグループを指定します（一致する場合、結果は破棄されます）。'
		,'Lookbehind is not supported in Javascript.' => '後読みはJavascriptではサポートされていません。'
		,'Invalid target for quantifier.' => '定量的のターゲットが無効です。'
		,'star' => '任意'
		,'Matches 0 or more of the preceding token.' => '直前の文字を0回以上繰り返す。'
		,'Match {{getQuant()}} of the preceding token.' => '直前の文字を{{getQuant()}}繰り返す。'
		,' or more' => '回以上'
		,'plus' => '1つ以上あればいい'
		,'optional' => 'あってもなくてもいい'
		,'between ' => ''
		,' and ' => '〜'
		,'lazy' => '非欲張り'
		,'Makes the preceding quantifier lazy, causing it to match as few characters as possible.' => '可能な限り短い結果を返します。'
		,'quantifier' => '定量的'
		,'alternation' => '交代'
		,'Acts like a boolean OR. Matches the expression before or after the <code>|</code>.' => 'OR見たいです。<code>|</code>の前後にある式に一致します。'
	];
}