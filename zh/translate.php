<?php
/*
Section: translate
Language: Simplified Chinese 简体中文
Translator: Luo Haojing
*/

$translations = array(
    'h1' => '翻译',

    'p1a' => '我们在2014年对 db4free.net 网站及数据库服务进行了更新，闲杂有了更简单的方法让您协助将 db4free.net 网站翻译为更多语言！',

    'p1b' => '网站内的所有文字都在 <a href="https://github.com/">GitHub</a>。 您可以从上面fork一份到自己的repository，完成您的翻译并送出 pull request 以供网站整合您的翻译。',

    'h2' => '怎么做？',

    'p2a' => '首先，如果您没有GitHub账号的话，您必须先注册一个 GitHub 账号。 于以下网址Fork一份到自己的repository ',

    'p2b' => '<a href="https://github.com/mpopp75/db4free-net-l10n">https://github.com/mpopp75/db4free-net-l10n</a>',

    'p2c' => ' 您的账号内将会有一份与线上一样的repository。 接下来您可以clone一份文件到您的电脑上。 Git 指令是:',

    'p2d' => 'git clone git@github.com:[您的GitHub账号]/db4free-net-l10n.git',

    'p2e' => '我们建议您另外创建一个分支来存放翻译版本，示例指令如下：',

    'p2f' => 'git checkout -b mytranslations',

    'p2g' => '如果项目内缺少您想翻译语言的文件夹，请从“en”文件夹复制一份，文件夹名称请参考语言代码表： <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1 language codes</a>.',

    'p2h' => '翻译时，您可以用翻译文字将英文原文覆盖。但要注意不可更改到ID的属性。 替换示例如下：',

    'p2i' => '\'h1\' => \'Welcome to db4free.net\',',

    'p2j' => 'by',

    'p2k' => '\'h1\' => \'Bienvenido a db4free.net\',',

    'p2l' => '如果遇到与原文相同意思的文字，您可以删除或保留。',

    'p2m' => '当您完成翻译时，commit 及 push 文件到您的 GitHub repository。 切换到您的翻译分支并点击 "New Pull Request"。输入简单的翻译语言、描述及任何遇到的困难，或任何无法完成的部分等，接着送出Pull Request。',

    'p2n' => '如果您想贡献一份心力，但却遇到困难不知从何开始，请于GitHub <a href="https://github.com/mpopp75/db4free-net-l10n/issues">Open a Ticket</a>.',
);
?>