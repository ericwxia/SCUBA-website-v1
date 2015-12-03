<?php
// Copyright:  Matthias Steffens
//             This code is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY.
//             Please see the GNU General Public License for more details.
// File:       ./includes/transtab_latex_unicode.inc.php
// Created:    10-Aug-06, 23:55
// Modified:   13-Aug-06, 16:16
// This is a translation table for best-effort conversion from LaTeX to Unicode entities. It contains a comprehensive list of substitution strings for LaTeX characters,
// which are used with the 'T1' font encoding. Uses commands from the 'textcomp' package. Unicode characters that can't be matched uniquely are commented out.
// Adopted from 'transtab' by Markus Kuhn
// (transtab.utf v1.8 2000-10-12 11:01:28+01 mgk25 Exp); see <http://www.cl.cam.ac.uk/~mgk25/unicode.html> for more info about Unicode and transtab.
function get_transtab_latex_unicode() {
return array(
  '\\$\\\\#\\$' => "#",
  "\\\\%" => "%",
  "\\\\&" => "&",
  "(?<!\\\\)~" => " ",
  "\\{\\\\textexclamdown\\}" => "¡",
  "\\{\\\\textcent\\}" => "¢",
  "\\{\\\\textsterling\\}" => "£",
  "\\{\\\\textyen\\}" => "¥",
  "\\{\\\\textbrokenbar\\}" => "¦",
  "\\{\\\\textsection\\}" => "§",
  "\\{\\\\textasciidieresis\\}" => "¨",
  "\\{\\\\textcopyright\\}" => "©",
  "\\{\\\\textordfeminine\\}" => "ª",
  "\\{\\\\guillemotleft\\}" => "«",
  "\\{\\\\textlnot\\}" => "¬",
  "\\{\\\\textregistered\\}" => "®",
  "\\{\\\\textasciimacron\\}" => "¯",
  "\\{\\\\textdegree\\}" => "°",
  "\\{\\\\textpm\\}" => "±",
  "\\{\\\\texttwosuperior\\}" => "²",
  "\\{\\\\textthreesuperior\\}" => "³",
  "\\{\\\\textasciiacute\\}" => "´",
  "\\{\\\\textmu\\}" => "µ",
  "\\{\\\\textparagraph\\}" => "¶",
  "\\{\\\\textperiodcentered\\}" => "·",
  "\\{\\\\c\\\\ \\}" => "¸",
  "\\{\\\\textonesuperior\\}" => "¹",
  "\\{\\\\textordmasculine\\}" => "º",
  "\\{\\\\guillemotright\\}" => "»",
  "\\{\\\\textonequarter\\}" => "¼",
  "\\{\\\\textonehalf\\}" => "½",
  "\\{\\\\textthreequarters\\}" => "¾",
  "\\{\\\\textquestiondown\\}" => "¿",
  "\\{?\\\\`\\{?A\\}?\\}?" => "À",
  "\\{?\\\\'\\{?A\\}?\\}?" => "Á",
  "\\{?\\\\\\^\\{?A\\}?\\}?" => "Â",
  "\\{?\\\\~\\{?A\\}?\\}?" => "Ã",
  "\\{?\\\\\"\\{?A\\}?\\}?" => "Ä",
  "\\\\AA\\ +" => "Å",
  "\\{?\\\\r\s\\{?A\\}?\\}?" => "Å",
  "\\{?\\\\AE\\}?" => "Æ",
  "\\{?\\\\c\sC\\}?" => "Ç",
  "\\{?\\\\`\\{?E\\}?\\}?" => "È",
  "\\{?\\\\'\\{?E\\}?\\}?" => "É",
  "\\{?\\\\\\^\\{?E\\}?\\}?" => "Ê",
  "\\{?\\\\\"\\{?E\\}?\\}?" => "Ë",
  "\\{?\\\\`\\{?I\\}?\\}?" => "Ì",
  "\\{?\\\\'\\{?I\\}?\\}?" => "Í",
  "\\{?\\\\\\^\\{?I\\}?\\}?" => "Î",
  "\\{?\\\\\"\\{?I\\}?\\}?" => "Ï",
  "\\{?\\\\DH\\}?" => "Ð",
  "\\{?\\\\~\\{?N\\}?\\}?" => "Ñ",
  "\\{?\\\\`\\{?O\\}?\\}?" => "Ò",
  "\\{?\\\\'\\{?O\\}?\\}?" => "Ó",
  "\\{?\\\\\\^\\{?O\\}?\\}?" => "Ô",
  "\\{?\\\\~\\{?O\\}?\\}?" => "Õ",
  "\\{?\\\\\"\\{?O\\}?\\}?" => "Ö",
  "\\{?\\\\texttimes\\}?" => "×",
  "\\\\O\\ +" => "Ø",
  "\\{?\\\\O\\}?" => "Ø",
  "\\{?\\\\`\\{?U\\}?\\}?" => "Ù",
  "\\{?\\\\'\\{?U\\}?\\}?" => "Ú",
  "\\{?\\\\\\^\\{?U\\}?\\}?" => "Û",
  "\\{?\\\\\"\\{?U\\}?\\}?" => "Ü",
  "\\{?\\\\'\\{?Y\\}?\\}?" => "Ý",
  "\\{?\\\\TH\\}?" => "Þ",
  "\\{?\\\\ss\\{?\\}?\\}?" => "ß",
  "\\{?\\\\`\\{?a\\}?\\}?" => "à",
  "\\{?\\\\'\\{?a\\}?\\}?" => "á",
  "\\{?\\\\\\^\\{?a\\}?\\}?" => "â",
  "\\{?\\\\~\\{?a\\}?\\}?" => "ã",
  "\\{?\\\\\"\\{?a\\}?\\}?" => "ä",
  "\\\\aa\\ +" => "å",
  "\\{?\\\\r\s\\{?a\\}?\\}?" => "å",
  "\\{?\\\\ae\\}?" => "æ",
  "\\{?\\\\c\\{?c\\}?\\}?" => "ç",
  "\\{?\\\\`\\{?e\\}?\\}?" => "è",
  "\\{?\\\\'\\{?e\\}?\\}?" => "é",
  "\\{?\\\\\\^\\{?e\\}?\\}?" => "ê",
  "\\{?\\\\\"\s?\\{?e\\}?\\}?" => "ë",
  "\\{?\\\\`\\{?i\\}?\\}?" => "ì",
  "\\{?\\\\'\\{?i\\}?\\}?" => "í",
  "\\{?\\\\\\^\\{?i\\}?\\}?" => "î",
  "\\{?\\\\\"\\{?i\\}?\\}?" => "ï",
  "\\{?\\\\dh\\}?" => "ð",
  "\\{?\\\\~\\{?n\\}?\\}?" => "ñ",
  "\\{?\\\\`\\{?o\\}?\\}?" => "ò",
  "\\{?\\\\'\\{?o\\}?\\}?" => "ó",
  "\\{?\\\\\\^\\{?o\\}?\\}?" => "ô",
  "\\{?\\\\~\\{?o\\}?\\}?" => "õ",
  "\\{?\\\\\"\\{?o\\}?\\}?" => "ö",
  "\\{?\\\\textdiv\\}?" => "÷",
  "\\\\o\\ +" => "ø",
  "\\{?\\\\o\\}?" => "ø",
  "\\{?\\\\`\\{?u\\}?\\}?" => "ù",
  "\\{?\\\\'\\{?u\\}?\\}?" => "ú",
  "\\{?\\\\\\^\\{?u\\}?\\}?" => "û",
  "\\{?\\\\\"\\{?u\\}?\\}?" => "ü",
  "\\{?\\\\'\\{?y\\}?\\}?" => "ý",
  "\\{?\\\\th\\}?" => "þ",
  "\\{?\\\\\"\\{?y\\}?\\}?" => "ÿ",
  "\\{?\\\\u\\{?A\\}?\\}?" => "Ă",
  "\\{?\\\\u\\{?a\\}?\\}?" => "ă",
//  "\\{?\\\\k\\{?A\\}?||}?" => "Ą",
  "\\{?\\\\k\\{?a\\}?\\}?" => "ą",
  "\\{?\\\\'\\{?C\\}?\\}?" => "Ć",
  "\\{?\\\\'\\{?c\\}?\\}?" => "ć",
  "\\{?\\\\v\\{?C\\}?\\}?" => "Č",
  "\\{?\\\\v\\{?c\\}?\\}?" => "č",
  "\\{?\\\\v\\{?c\\}?\\}?" => "č",
  "\\{?\\\\v\\{?D\\}?\\}?" => "Ď",
  "\\{?\\\\v\\{?d\\}?\\}?" => "ď",
  "\\{?\\\\DJ\\}?" => "Đ",
  "\\{?\\\\dj\\}?" => "đ",
  "\\{?\\\\k\\{?E\\}?\\}?" => "Ę",
  "\\{?\\\\k\\{?e\\}?\\}?" => "ę",
  "\\{?\\\\v\\{?E\\}?\\}?" => "Ě",
  "\\{?\\\\v\\{?e\\}?\\}?" => "ě",
  "\\{?\\\\u\s?\\{?e\\}?\\}?" => "ĕ",
  "\\{?\\\\u\\{?G\\}?\\}?" => "Ğ",
  "\\{?\\\\u\\{?g\\}?\\}?" => "ğ",
  "\\{?\\\\.\\{?g\\}?\\}?" => "ġ",
  "\\{?\\\\.\\{?I\\}?\\}?" => "İ",
  "\\\\'\\{?\\\\i\\}?" => "í",
  "\\{?\\\\i\\}?" => "ı",
  "\\{?\\\\'\\{?L\\}?\\}?" => "Ĺ",
//  "\\{?\\\\'\\{?l\\}?||}?" => "ĺ",
  "\\{?\\\\v\\{?L\\}?\\}?" => "Ľ",
  "\\{?\\\\v\\{?l\\}?\\}?" => "ľ",
  "\\{?\\\\L\\}?" => "Ł",
  "\\{?\\\\l\\}?" => "ł",
  "\\{?\\\\'\\{?N\\}?\\}?" => "Ń",
  "\\{?\\\\'\\{?n\\}?\\}?" => "ń",
  "\\{?\\\\v\\{?N\\}?\\}?" => "Ň",
  "\\{?\\\\v\\{?n\\}?\\}?" => "ň",
  "\\{?\\\\NG\\}?" => "Ŋ",
  "\\{?\\\\ng\\}?" => "ŋ",
  "\\{?\\\\H\\{?O\\}?\\}?" => "Ő",
  "\\{?\\\\H\\{?o\\}?\\}?" => "ő",
  "\\{?\\\\OE\\}?" => "Œ",
  "\\{?\\\\oe\\}?" => "œ",
  "\\{?\\\\'\\{?R\\}?\\}?" => "Ŕ",
  "\\{?\\\\'\\{?r\\}?\\}?" => "ŕ",
  "\\{?\\\\v\\{?R\\}?\\}?" => "Ř",
  "\\{?\\\\v\\{?r\\}?\\}?" => "ř",
  "\\{?\\\\'\\{?S\\}?\\}?" => "Ś",
  "\\{?\\\\'\\{?s\\}?\\}?" => "ś",
  "\\{?\\\\c\\{?S\\}?\\}?" => "Ş",
  "\\{?\\\\c\\{?s\\}?\\}?" => "ş",
  "\\{?\\\\v\\{?S\\}?\\}?" => "Š",
  "\\{?\\\\v\\{?s\\}?\\}?" => "š",
  "\\{?\\\\c\\{?T\\}?\\}?" => "Ţ",
  "\\{?\\\\c\\{?t\\}?\\}?" => "ţ",
  "\\{?\\\\v\\{?T\\}?\\}?" => "Ť",
  "\\{?\\\\v\\{?t\\}?\\}?" => "ť",
  "\\{?\\\\r\\{?U\\}?\\}?" => "Ů",
  "\\{?\\\\r\\{?u\\}?\\}?" => "ů",
  "\\{?\\\\H\\{?U\\}?\\}?" => "Ű",
  "\\{?\\\\H\\{?u\\}?\\}?" => "ű",
  "\\{?\\\\\"\\{?Y\\}?\\}?" => "Ÿ",
  "\\{?\\\\'\\{?Z\\}?\\}?" => "Ź",
  "\\{?\\\\'\\{?z\\}?\\}?" => "ź",
  "\\{?\\\\.\\{?Z\\}?\\}?" => "Ż",
  "\\{?\\\\.\\{?z\\}?\\}?" => "ż",
  "\\{?\\\\v\\{?Z\\}?\\}?" => "Ž",
  "\\{?\\\\v\\{?z\\}?\\}?" => "ž",
  "\\{?\\\\textflorin\\}?" => "ƒ",
  "\\{?\\\\textasciicircum\\}?" => "ˆ",
  "\\{?\\\\textacutedbl\\}?" => "˝",
  "\\{?\\\\textendash\\}?|--" => "–",
  "\\{?\\\\textemdash\\}?|---" => "—",
  "\\{?\\\\textbardbl\\}?" => "‖",
  "\\{?\\\\textunderscore\\}?" => "‗",
  "\\{?\\\\textquoteleft\\}?" => "‘",
  "\\{?\\\\textquoteright\\}?" => "’",
  "\\{?\\\\quotesinglbase\\}?" => "‚",
  "\\{?\\\\textquotedblleft\\}?" => "“",
  "\\{?\\\\textquotedblright\\}?" => "”",
  "\\{?\\\\quotedblbase\\}?" => "„",
  "\\{?\\\\textdagger\\}?" => "†",
  "\\{?\\\\textdaggerdbl\\}?" => "‡",
  "\\{?\\\\textbullet\\}?" => "•",
  "\\{?\\\\textellipsis\\}?" => "…",
  "\\{?\\\\textperthousand\\}?" => "‰",
  "\\{?\\\\guilsinglleft\\}?" => "‹",
  "\\{?\\\\guilsinglright\\}?" => "›",
  "\\{?\\\\textfractionsolidus\\}?" => "⁄",
  '\\$\\^\\{0\\}\\$' => "⁰",
  '\\$\\^\\{4\\}\\$' => "⁴",
  '\\$\\^\\{5\\}\\$' => "⁵",
  '\\$\\^\\{6\\}\\$' => "⁶",
  '\\$\\^\\{7\\}\\$' => "⁷",
  '\\$\\^\\{8\\}\\$' => "⁸",
  '\\$\\^\\{9\\}\\$' => "⁹",
  '\\$\\^\\{+\\}\\$' => "⁺",
  '\\$\\^\\{-\\}\\$' => "⁻",
  '\\$\\^\\{=\\}\\$' => "⁼",
  '\\$\\^\\{n\\}\\$' => "ⁿ",
  '\\$_\\{0\\}\\$' => "₀",
  '\\$_\\{1\\}\\$' => "₁",
  '\\$_\\{2\\}\\$' => "₂",
  '\\$_\\{3\\}\\$' => "₃",
  '\\$_\\{4\\}\\$' => "₄",
  '\\$_\\{5\\}\\$' => "₅",
  '\\$_\\{6\\}\\$' => "₆",
  '\\$_\\{7\\}\\$' => "₇",
  '\\$_\\{8\\}\\$' => "₈",
  '\\$_\\{9\\}\\$' => "₉",
  '\\$_\\{+\\}\\$' => "₊",
  '\\$_\\{-\\}\\$' => "₋",
  '\\$_\\{=\\}\\$' => "₌",
  "\\{?\\\\texteuro\\}?" => "€",
  "\\{?\\\\textcelsius\\}?" => "℃",
  "\\{?\\\\textnumero\\}?" => "№",
  "\\{?\\\\textcircledP\\}?" => "℗",
  "\\{?\\\\textservicemark\\}?" => "℠",
  "\\{?\\\\texttrademark\\}?" => "™",
  "\\{?\\\\textohm\\}?" => "Ω",
  "\\{?\\\\textestimated\\}?" => "℮",
  "\\{?\\\\textleftarrow\\}?" => "←",
  "\\{?\\\\textuparrow\\}?" => "↑",
  "\\{?\\\\textrightarrow\\}?" => "→",
  "\\{?\\\\textdownarrow\\}?" => "↓",
  '\\$\\\\infty\\$' => "∞",
  "\\{?\\\\textlangle\\}?" => "〈",
  "\\{?\\\\textrangle\\}?" => "〉",
  "\\{?\\\\textvisiblespace\\}?" => "␣",
  "\\{?\\\\textopenbullet\\}?" => "◦",
  "\\{?\\\\Delta\\}?" => "Δ",
  "\\{?\\\\iota\\}?" => "ι",
  "\\{?\\\\omicron\\}?" =>"ο",
  "\\{?\\\\mu\\}?" => "μ",
  "\\{?\\\\eta\\}?" => "η",
  "\\{?\\\\delta\\}?" => "δ",
  "\\{?\\\\varsigma\\}?" => "ς",
  "\\{?\\\\Sigma\\}?" => "Σ",
  "\\{?\\\\pi\\}?" => "π",
  "\\{?\\\\nu\\}?" => "ν",
  "\\{?\\\\epsilon\\}?" => "ε",
  "\\{?\\\\lambda\\}?" => "λ",
  "\\{?\\\\=\\{?o\\}?\\}?" => "ō",
);
}