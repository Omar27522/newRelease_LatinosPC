<?php
$page = new Structure('../../', 'english', 'The Apostles');
$keywords = 'Keyword_test';
$description = 'Description_test';

function apostles()
{
    $titles = [
        'From the Greek apostolos; Apostle is someone who is sent, or one commissioned.',
        'In Hebrews 3: "Jesus Our Apostle and High Priest',
        'The Twelve Original Apostles',
        'Additional Apostles',
        '📖 Additional Apostles in Scripture',
        'Name(s)',
        'Reference(s)',
        '🧮 Total Count'
    ];
    $names = [
        'Simon Peter and Andrew (Sons of Jonah)',
        'James and John (Sons of Zebedee)',
        'Philip and Bartholomew',
        'Thomas and Matthew',
        'James (son of Alphaeus)',
        'Thaddaeus',
        'Simon the Zealot',
        'Judas Iscariot',
        'Matthias (replaced Judas)',
        'Paul (Apostle to the Gentiles)',
    ];
    $subTitles = [
        'Let’s start counting. Yes, there were the twelve chosen by Jesus (see Acts 1:13). Judas Iscariot, who betrayed Jesus, was replaced by Matthias (Acts 1:26). Revelation 21:14 confirms “the twelve apostles of the Lamb.” Counting both Judas and Matthias brings us to',
        '13 apostles',
        'But it doesn’t end there. Ephesians 4:11–13 speaks of ascension-gift apostles given by Christ',
        'until we all attain to the unity of the faith.',
        'That implies the apostolic ministry continues today.',
        'Including everyone listed—even debated figures like Junia—we arrive at a total of',
        '25 apostles',
        'named in the New Testament.'
    ];
    $adicionalNames = [
        ['James (Jesus’ brother)','Galatians 1:19'],
        ['Barnabas','Acts 14:14'],
        ['Paul','Acts 14:14, etc.'],
        ['Apollos','1 Corinthians 4:6–9'],
        ['Timothy & Silvanus','1 Thessalonians 1:1; 2:6'],
        ['Epaphroditus','Philippians 2:25'],
        ['Two unnamed brothers','2 Corinthians 8:23'],
        ['Andronicus & Junia (disputed)','Romans 16:7'],
        ['Jesus Christ','Hebrews 3:1'],
    ];

    $_Jesus='“Jesus, the Apostle and High Priest of our confession.” – Hebrews 3:1';
    include ('content_Apostles.php');
}

include ('./anvil/structure.php');
?>