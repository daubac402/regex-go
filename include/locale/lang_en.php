<?php
class CurrentLanguage
{
	const LANG = [
		'Regular Expression' => 'Regular Expression'
		,'Test String' => 'Test String'
		,'Expression Flags' => 'Expression Flags'
		,'ignore case' => 'ignore case'
		,'global' => 'global'
		,'multiline' => 'multiline'
		,'ERROR: ' => 'ERROR: '
		,'flags' => 'flags'
		,'no match' => 'no match'
		,'match' => 'match'
		,'es' => 'es'
		,'infinite' => 'infinite'
		,'The expression can match 0 characters, and therefore matches infinitely.' => 'The expression can match 0 characters, and therefore matches infinitely.'
		,'open' => 'open'
		,'Indicates the start of a regular expression.' => 'Indicates the start of a regular expression.'
		,'close' => 'close'
		,'Indicates the end of a regular expression and the start of expression flags.' => 'Indicates the end of a regular expression and the start of expression flags.'
		,'global search' => 'global search'
		,'Retain the index of the last match, allowing iterative searches.' => 'Retain the index of the last match, allowing iterative searches.'
		,'Retain the index of the last match, allowing subsequent searches to start from the end of the previous match.<p>Without the global flag, subsequent searches will return the same match.</p><hr/>RegExr only searches for a single match when the global flag is disabled to avoid infinite match errors.' => 'Retain the index of the last match, allowing subsequent searches to start from the end of the previous match.<p>Without the global flag, subsequent searches will return the same match.</p><hr/>RegExr only searches for a single match when the global flag is disabled to avoid infinite match errors.'
		,'Makes the whole expression case-insensitive.' => 'Makes the whole expression case-insensitive.'
		,'Beginning/end anchors (<b>^</b>/<b>$</b>) will match the start/end of a line.' => 'Beginning/end anchors (<b>^</b>/<b>$</b>) will match the start/end of a line.'
		,'When the multiline flag is enabled, beginning and end anchors (<code>^</code> and <code>$</code>) will match the start and end of a line, instead of the start and end of the whole string.<p>Note that patterns such as <code>/^[\\s\\S]+$/m</code> may return matches that span multiple lines because the anchors will match the start/end of <b>any</b> line.</p>' => 'When the multiline flag is enabled, beginning and end anchors (<code>^</code> and <code>$</code>) will match the start and end of a line, instead of the start and end of the whole string.<p>Note that patterns such as <code>/^[\\s\\S]+$/m</code> may return matches that span multiple lines because the anchors will match the start/end of <b>any</b> line.</p>'
		,'character' => 'character'
		,'Matches a {{getChar()}} character (char code {{code}}).' => 'Matches a {{getChar()}} character (char code {{code}}).'
		,'beginning' => 'beginning'
		,'Matches the beginning of the string, or the beginning of a line if the multiline flag (<code>m</code>) is enabled.' => 'Matches the beginning of the string, or the beginning of a line if the multiline flag (<code>m</code>) is enabled.'
		,'end' => 'end'
		,'Matches the end of the string, or the end of a line if the multiline flag (<code>m</code>) is enabled.' => 'Matches the end of the string, or the end of a line if the multiline flag (<code>m</code>) is enabled.'
		,'Character classes' => 'Character classes'
		,'any character except newline' => 'any character except newline'
		,'word, digit, whitespace' => 'word, digit, whitespace'
		,'not word, digit, whitespace' => 'not word, digit, whitespace'
		,'any of a, b, or c' => 'any of a, b, or c'
		,'not a, b, or c' => 'not a, b, or c'
		,'character between a & G (a, b, .., z, A, B, .., G)' => 'character between a & G (a, b, .., z, A, B, .., G)'
		,'Anchors' => 'Anchors'
		,'start / end of the string' => 'start / end of the string'
		,'word boundary' => 'word boundary'
		,'Escaped characters' => 'Escaped characters'
		,'escaped . * \ ' => 'escaped . * \ '
		,'tab, linefeed, carriage return' => 'tab, linefeed, carriage return'
		,'unicode escaped' => 'unicode escaped'
		,'Groups & Lookaround' => 'Groups & Lookaround'
		,'capture group' => 'capture group'
		,'backreference to group #1' => 'backreference to group #1'
		,'non-capturing group' => 'non-capturing group'
		,'positive lookahead' => 'positive lookahead'
		,'negative lookahead' => 'negative lookahead'
		,'positive lookbehind' => 'positive lookbehind'
		,'negative lookbehind' => 'negative lookbehind'
		,'atomic group' => 'atomic group'
		,'(not supported in Javascript)' => '(not supported in Javascript)'
		,'Quantifiers & Alternation' => 'Quantifiers & Alternation'
		,'match 0 or more times' => 'match 0 or more times'
		,'match 1 or more times' => 'match 1 or more times'
		,'match 0 or 1 time only' => 'match 0 or 1 time only'
		,'match exactly five times' => 'match exactly five times'
		,'match two or more times' => 'match two or more times'
		,'match between one and three times' => 'match between one and three times'
		,'(greedy)' => '(greedy)'
		,'(lazy)' => '(lazy)'
		,'match ab or cd' => 'match ab or cd'
		,'RegexGo is a tool to learn, build, & test Regular Expressions (by Javascript)' => 'RegexGo is a tool to learn, build, & test Regular Expressions (by Javascript)'
		,'Results update in <b>real-time</b> as you type' => 'Results update in <b>real-time</b> as you type'
		,'<b>Roll over</b> a match or expression for details' => '<b>Roll over</b> a match or expression for details'
		,'<b>Undo</b> & <b>Redo</b> with Ctrl-Z / Y' => '<b>Undo</b> & <b>Redo</b> with Ctrl-Z / Y'
		,'dot' => 'dot'
		,'Matches any character except line breaks.' => 'Matches any character except line breaks.'
		,'word' => 'word'
		,'Matches any word character (alphanumeric & underscore).' => 'Matches any word character (alphanumeric & underscore).'
		,'digit' => 'digit'
		,'Matches any digit character (0-9).' => 'Matches any digit character (0-9).'
		,'whitespace' => 'whitespace'
		,'Matches any whitespace character (spaces, tabs, line breaks).' => 'Matches any whitespace character (spaces, tabs, line breaks).'
		,'not word' => 'not word'
		,'Matches any character that is not a word character (alphanumeric & underscore).' => 'Matches any character that is not a word character (alphanumeric & underscore).'
		,'not digit' => 'not digit'
		,'Matches any character that is not a digit character (0-9).' => 'Matches any character that is not a digit character (0-9).'
		,'not whitespace' => 'not whitespace'
		,'Matches any character that is not a whitespace character (spaces, tabs, line breaks).' => 'Matches any character that is not a whitespace character (spaces, tabs, line breaks).'
		,'character set' => 'character set'
		,'Match any character in the set.' => 'Match any character in the set.'
	];
}