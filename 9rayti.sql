-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 12 août 2020 à 17:39
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `9rayti`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categorie` int(255) NOT NULL,
  `language` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `description`, `categorie`, `language`, `created_at`, `views`) VALUES
(100, 'هام جدا .. لكل من يبحث عن منح دراسية مجانية في فرنسا .. إليك الإجابة', '<blockquote>\r\n<p style=\"text-align:right\"><strong>منح دراسية مجانية في فرنسا&nbsp;&hellip; تعتبر فرنسا من الدول الأكثر استقطابا للشباب الراغبين في إتمام دراستهم لأنها من أفضل النماذج في الإنجازات العلمية، بحيث أنها تتوفر على نظام تعليمي جد متطور</strong></p>\r\n</blockquote>\r\n\r\n<p style=\"text-align:right\">إضافة إلى أنها تمتاز بمجموعة من التسهيلات التي تضعها رهن إشارة الطلبة سواء الفرنسيين أو الأجانب</p>\r\n\r\n<p style=\"text-align:right\">إلا أنه من المعروف على أن<strong>&nbsp;إتمام الدراسة في فرنسا</strong>&nbsp;ليس بإمكان الجميع خصوصا من الجانب المادي.</p>\r\n\r\n<p style=\"text-align:right\">لذلك نجد أن مجموعة من الطلاب يلجؤون الى طلب المنح الدراسية التي تقدمها الجامعات الفرنسية</p>\r\n\r\n<p style=\"text-align:right\">هاته المنح التي تكون إما جزئية أو كاملة للدراسة، لكن في كل الحالات يبقى الحصول على إحدى هذه المنح شيئا رائعا ومفيدا بشكل كبير للطالب.</p>\r\n\r\n<p style=\"text-align:right\">لذلك ندعوك عزيزي الطالب الى مواصلة قراءة هذا المقال لتتعرف على&nbsp;<strong>المنح الدراسية المقدمة من طرف الجامعات الفرنسية</strong>.</p>\r\n\r\n<p style=\"text-align:right\">ولما لا قد تكون محظوظا في الحصول عليها وتمول بها دراستك من البداية حتى النهاية.</p>\r\n\r\n<h2 style=\"text-align:right\"><strong>أهم 5 منح دراسية مجانية في فرنسا :</strong></h2>\r\n\r\n<p style=\"text-align:right\">توجد مجموعة من المنح الدراسية التي تقدمها الجامعات الفرنسية الى مختلف الطلاب لكن سنعطيكم الأفضل فيها :</p>\r\n\r\n<h3 style=\"text-align:right\"><strong>منح دراسيةمن جامعة باريس ساكلي:</strong></h3>\r\n\r\n<p style=\"text-align:right\">تختص هذه الجامعة في إتمام الدراسات العليا أي أنها مخصصة للطلاب أصحاب الإجازة لإتمام الماستر، أو أصحاب الماستر لإتمام الدكتورة.</p>\r\n\r\n<p style=\"text-align:right\">يبدأ الطلاب في إيداع ملفاتهم ابتداءا من 29 فبراير إلى غاية 21 أبريل وإذا كنت من الفائزين وهذا ما نتمنى أكيد ستكون بداية الدراسة في شتنبر.</p>\r\n\r\n<h3 style=\"text-align:right\"><strong>منح دراسية من مدرسة الأساتذة العليا:</strong></h3>\r\n\r\n<p style=\"text-align:right\">هي الأخرى متخصصة في الدراسات العليا لمدة 2 أو 3 سنوات أي لفائدة الطلاب أصحاب الإجازة فما فوق</p>\r\n\r\n<p style=\"text-align:right\">وينتهي التسجيل بها في 1 فبراير أي أن إيداع الملف سيكون أكيد في بدايات شهر يناير</p>\r\n\r\n<h3 style=\"text-align:right\">&nbsp;&nbsp;<strong>منح دراسية من جامعة إيميل بوتمي:</strong></h3>\r\n\r\n<p style=\"text-align:right\">هذه الجامعة هي الأخرى تستقطب الطلاب من خارج الاتحاد الأوروبي شريطة أن يكونوا متفوقين وألا تزيد الأعمار</p>\r\n\r\n<p style=\"text-align:right\">بالنسبة للمقبلين على الماستر على 30 سنة والدكتورة أقل من 35 سنة، حتى تكون لك فرصة في القبول</p>\r\n\r\n<p style=\"text-align:right\">وتاريخ إيداع الملف يبدأ من شهر أكتوبر إلى غاية شهر يناير.</p>\r\n', 17, 'ar', '2019-11-19 19:13:28', 0),
(101, 'منح وزارة الشؤون الخارجية والتنمية الدولية', '<p style=\"text-align:right\"><strong>لمنح التي تقدمها سفارات فرنسا في الخارج:</strong></p>\r\n\r\n<hr />\r\n<p style=\"text-align:right\"><br />\r\nتتولى وزارة الشؤون الخارجية والتنمية الدولية توزيع منح الحكومة الفرنسية للدراسة أو التمرين أو تعلم اللغة في فرنسا. وتوزع معظم المنح من خلال&nbsp;<strong>أقسام التعاون والنشاط الثقافي</strong>&nbsp;في السفارات والقنصليات العامّة الفرنسية في الخارج. لذا يجب على جميع المرشحين، مهما كان بلد إقامتهم، التوجّه مباشرة إلى أقسام التعاون والنشاط الثقافي في بلد المنشأ للحصول على جميع المعلومات بشأن المنح، قبل مغادرتهم بمدة كافية، وتشمل هذه المعلومات شروط الحصول على المنحة والجدول الزمني لعملية اختيار المرشحين وملفات طلب المنحة.<br />\r\nهنالك عدة فئات من المنح وهي: المنح الدراسية، والمنح للتمرين، ومنح الإقامة العلمية العالية المستوى.</p>\r\n\r\n<p style=\"text-align:right\">للمزيد من المعلومات:<br />\r\nاتصل بقسم التعاون والنشاط الثقافي في سفارة فرنسا أو القنصلية الفرنسية في بلد إقامتك.</p>\r\n\r\n<hr />\r\n<p style=\"text-align:right\"><strong>البرامج المحدّدة:</strong><br />\r\nتمنح أيضا وزارة الشؤون الخارجية والتنمية الدولية منحا دراسية في إطار البرامج المحدّدة التابعة لأقسام الوزارة في باريس (الإدارة العامة للعولمة والتنمية والشراكات، وإدارة التعاون الثقافي والجامعي والبحثي، والإدارة الفرعية للتعليم العالي، ووحدة توجيه الوكالات التنفيذية للتنقل).</p>\r\n\r\n<hr />\r\n<p style=\"text-align:right\"><strong>منح الامتياز إيفل:</strong><br />\r\nاستهلت وزارة الشؤون الخارجية والتنمية الدولية برنامج منح الامتياز إيفل لشهادة الماجستير في عام 1999، بغية دعم استقطاب الطلاب الأجانب في مؤسسات التعليم العالي الفرنسية، في سياق ازدياد التنافس بين البلدان المتطورة على استقطاب نخبة الطلاب الأجانب.<br />\r\nواستكملت هذه المنظومة في عام 2005 بإضافة مسار الدكتوراة الموجّه لطلاب الدكتوراة المتفوقين.<br />\r\nوقرّرت وزارة الشؤون الخارجية والتنمية الدولية تجميع مساري هذا البرنامج في دعوة واحدة لتقديم الترشيحات حرصا منها على تعزيز وضوح البرنامج. غير أنه ثمة استمارتا ترشيح مختلفتان لكل واحد من المسارين.</p>\r\n\r\n<p style=\"text-align:right\">وتموّل منظومة منح إيفل ما يلي:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: right;\">التعليم بمستوى الماجستير</li>\r\n	<li style=\"text-align: right;\">التنقل لمدة عشرة أشهر في إطار الوصاية الجامعية المشتركة أو الإشراف المشترك على أطروحة الدكتوراة (من المفضل أن يجري ذلك في خلال السنة الثانية أو الثالثة من الدكتوراة).</li>\r\n</ul>\r\n\r\n<p style=\"text-align:right\">وتتمثل أهداف برنامج الامتياز إيفل التابع لوزارة الشؤون الخارجية والتنمية الدولية فيما يلي:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: right;\">تعليم متخذي القرارات الأجانب القادمين من القطاعين الخاص والعام في مؤسسات التعليم العالي الفرنسية في ثلاثة مجالات تعليم ذات أولوية (العلوم، والاقتصاد-الإدارة، والحقوق والعلوم السياسية)؛</li>\r\n	<li style=\"text-align: right;\">تشجيع ترشيحات الطلاب المتحدرين من البلدان الناشئة، وفي المقام الأول آسيا وأمريكا اللاتينية وأوروبا الشرقية والدول الحديثة العضوية في الاتحاد الأوروبي، بالإضافة إلى البلدان الصناعية فيما يخص مستوى الدكتوراة.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:right\">إن برنامج إيفل هو أداة متوفرة لمؤسسات التعليم العالي الفرنسية لمساعدتها في استقطاب أفضل الطلاب الأجانب. ويقتصر تقديم الترشيحات على المؤسسات الفرنسية حصرا، ويجب على المؤسسات التي تقدّم مرشحين أن تتعهد بتسجيل الطلاب المقبولين في برنامج التعليم الذي اختاروه في طلبهم.</p>\r\n\r\n<p style=\"text-align:right\">وأسندت وزارة الشؤون الخارجية والتنمية الدولية إدارة برنامج إيفل إلى وكالة&nbsp;<a href=\"http://www.campusfrance.org/fr/\" rel=\"external\" target=\"_blank\" title=\"lien externe\">كامبوس فرانس</a>.</p>\r\n\r\n<hr />\r\n<p style=\"text-align:right\"><strong>منح إكسلنس-ماجور:</strong><br />\r\nيندرج برنامج منح إكسلنس-ماجور، وهو برنامج مشترك بين الإدارة العامّة للعولمة في وزارة الشؤون الخارجية والتنمية الدولية ووكالة التعليم الفرنسي في الخارج، ضمن سياسة ترويج التعليم العالي الفرنسي. ويمكّن البرنامج أفضل الطلاب الأجانب في مؤسسات التعليم الفرنسي في الخارج (وفق قائمة المدارس التي أقرّت في 4 حزيران/يونيو 2010) من متابعة تعليمهم العالي بمستوى رفيع في فرنسا.</p>\r\n\r\n<p style=\"text-align:right\">وتمثل منح إكسلنس-ماجور أداة لترويج التعليم العالي الفرنسي تستخدم في إطار سياسة الثقافة والتعاون الفرنسية في الخارج.</p>\r\n\r\n<p style=\"text-align:right\">وترمي هذه المنح إلى تشجيع تنقل الطلاب وهي واسطة للتنوع الثقافي الذي تدعمه وزارة الشؤون الخارجية والتنمية الدولية ووكالة التعليم الفرنسي في الخارج، عبر شبكة مؤسسات التعليم الفرنسي في الخارج.<br />\r\nوتقتصر هذه المنح على الطلاب الأجانب خريجي المدارس الثانوية الفرنسية لمتابعة تعليمهم في برامج التعليم العالي النخبوي.</p>\r\n\r\n<p style=\"text-align:right\">ويتألف هذا البرنامج من جزأين، الجزء الأول ممول من اعتمادات وكالة التعليم الفرنسي في الخارج ويمنح للطلاب الأجانب من خرّيجي المدارس الثانوية الفرنسية في الخارج، الذين حصلوا على شهادة الثانوية بدرجة جيد أو جيد جدا، ويشمل منحة لمدة سنتين من أجل الالتحاق بالأقسام التحضيرية أو المساق الجامعي للقب الأول في فرنسا. أما الجزء الثاني الممول من اعتمادات وزارة الشؤون الخارجية والتنمية الدولية، فيشمل المنح لمدة ثلاث سنوات لتمكين هؤلاء الطلاب من متابعة مساقهم التعليمي في المعاهد العليا أو الجامعات حتى الحصول على لقب الماجستير (5 سنوات تعليم جامعي).</p>\r\n', 17, 'fr', '2019-11-19 19:17:58', 0),
(102, 'إفريقيا تطلق برنامج «1000 فكرة» لتشجيع المقاولين الشباب', '<p style=\"text-align:right\">في إطار انفتاحها على الشباب المغربي المقاوب، ومن من باب توفير الظروف المناسبة وتهييء الأرضية لحاملي المشاريع لإنشاء المقاولات، أطلقت شركة إفريقيا للمحروقات برنامجا وطنيا لدعم الشباب..</p>\r\n\r\n<p style=\"text-align:right\">في إطار انفتاحها على الشباب المغربي المقاوب، ومن من باب توفير الظروف المناسبة وتهييء الأرضية لحاملي المشاريع لإنشاء المقاولات، أطلقت شركة إفريقيا للمحروقات برنامجا وطنيا لدعم الشباب ومساعدتهم ماديا ومعنويا لتحويل مشاريعهم إلى مصادر للدخل وتشجيع التشغيل الذاتي لهؤلاء المقاولين الشباب. وفي هذا السياق، تم الإعلان، الأسبوع الماضي، عن التفعيل الرسمي لهذه المبادرة وتقديم مختلف التفاصيل الخاصة بهذا البرنامج الوطني.</p>\r\n\r\n<p style=\"text-align:right\">وتسعى شركة &laquo;إفريقيــا&raquo;، فــي إطــار سياســتها فــي مجــال المســؤولية الاجتماعيــة للمقاولــة إلــى إرســاء أســس برنامــج موجــه للشــباب و غيــر الشــباب حاملــي الأفـكار و المشـاريع، فصممـت &laquo;1000 فكـرة&raquo;. ولضمـان الإرسـاء المثالـي والمسـتدام لهـذه المبـادرة، تـم تأسـيس مؤسسـة أطلـق عليهـا اسـم &laquo;معـاك&raquo;.</p>\r\n\r\n<p style=\"text-align:right\">وسـتتولى هـذه المؤسسـة مهمـة الإشـراف علـى برنامـج &laquo;1000 فكـرة&raquo; ومتابعـة إنجـازه. كمـا أن إفريقيـا ومعـاك أبرمتا اتفاقـا مـع ثلاثة شـركاء متخصصيـن فـي المجـال: &laquo;School Business PopUp&raquo;، وهـي مؤسسـة إنجليزيـة مـن الجيـل الجديـد وذات أداء رفيـع فـي التشـجيع علـى خلـق المقـاوالات، وحاضنتـان مغربيتـان مـن بيـن الأبـرز فـي البـلاد، وهمـا &laquo;بدايـة&raquo; و &laquo;MCISE&raquo;.</p>\r\n\r\n<p style=\"text-align:right\">وفي كلمة له خلال تقديم تفاصيل البرنامج الجديد قال سعيد البغدادي، مدير عام شركة إفريقيا على أنهم يطلقون اليــوم برنامــج &laquo;1000 فـكـــرة&raquo; علــى الصعيــد الوطنــي، لكــي يصلوا إلــى أكبــر عــدد ممكــن مــن الشــباب فــي كل أنحــاء المملكــة، مضيفا أنه سـيتم كذلـك بـث شـريط علـى الشـبكات الاجتماعيـة يذكر بأنـه بإمـكان كل واحـد منـا تحويـل أحلامـه إلـى حقائـق علـى أرض الواقـع، وتحويـل أفـكاره إلـى مقاولـة صغيـرة، بـل وحتى كبيـرة.</p>\r\n\r\n<p style=\"text-align:right\">وأوضح البغدادي أن الدعم المادي للمقاولين الشباب الذين اختاروا الانخراط في برنامج &laquo;1000 فكرة&raquo; يمكنهم الاستفادة، فضلا عن التأطير والمواكبة من مبلغ إجمالي تمويلي قد يصل إلى 200 ألف درهما.وهو مبلغ يرتفع وينخفض حسب نوعية المشروع ومتطلباته وكل الأمور اللوجيستية المتعلقة به.</p>\r\n', 19, 'fr', '2019-11-19 19:26:36', 1),
(103, ' من متخرج من -- ENCG -- اسئلة واجوبة قد تهمك', '<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>السلام عليكم , اريد ان اسال عن ما بعد encg , كم يتراوح الاجر في العمل ؟</p>\r\n\r\n<p>يصعب التحديد بدقة فالاجر يختلف حسب مجموعة من المتغيرات كقطاع العمل و حجم المؤسسة المشغلة بالاضافة الى جودة تكوين الطالب ...</p>\r\n\r\n<p>انا سأعطيك فكرة على العموم</p>\r\n\r\n<p>- بالقطاع البنكي : الأجر يتراوح بين 6000 - 8000 درهم كبداية تتغير حسب المنصب و البنك المشغل و مكان الاشتغال (بترتيب تصاعدي الوكالة ثم مركز الأعمال ثم الادارة الجهوية أو العامة)</p>\r\n\r\n<p>- بالشركات المتعددة الجنسيات الأجر يتراوح بين 7000 - 9000 درهم كبداية متغيرة حسب طبيعة عمل الشركة (بترتيب تصاعدي شركات Offshoring ثم الفروع الرسمية)</p>\r\n\r\n<p>- بالشركات المغربية الكبرى يقارب الأجر تقريبا القطاع البنكي أو أكثر قليلا ما</p>\r\n\r\n<p>- بالشركات الصغرى فأغلبها يقترح أجور كارثية في بعض الاحيان تقارب أجور BAC+2 أو BAC+3 و هذا موضوع أخر...</p>\r\n\r\n<p>بما يخص القطاع العام :</p>\r\n\r\n<p>- فالدبلوم يخول الولوج الى السلم 11 باعتباره مكافئا لدبلوم ماستر Master و بالتالي فالأجر الصافي يكون قرابة يقارب 7200 درهم بالاضافة الى des primes تختلف من وزارة الى اخرى</p>\r\n\r\n<p>على العموم يجب على طالب ENCG عند مقابلات العمل الحفاظ على مجال على أقل بين 6500 الى 8000 درهم احتراما لقيمة الدبلوم في سوق الشغل.</p>\r\n\r\n<p>ارجو أن أكون قد وفقت في الاجابة على سؤالك</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>اخي انا السنة القادمة ساترشح لباك حر و اريد ولوج encg مع ان عمري 23 سنة فهل لدي امل في الولوج ام سيكون السن عائق امامي ؟ و ماهو السن الاقصى للولوج ؟ و شكرا [/quot<br />\r\nالسلام عليكم<br />\r\nليس هناك شرط السن من أجل الولوج الى ENCG<br />\r\nراجع المراسلة الوزارية في هذا الرابط<br />\r\nموفق<br />\r\nhttps://www.tawjihnet.net/actualites/bac-preinscription-au-concours-encg-tafem-maroc-2018/&nbsp;</p>\r\n</blockquote>\r\n', 19, 'fr', '2019-11-19 19:39:00', 0),
(104, 'وزارة التربية الوطنية والتكوين المهني والتعليم العالي باك حر 2020 Bac Libre 2020', '<p dir=\"rtl\">تعلن وزارة التربية الوطنية والتكوين المهني والتعليم العالي والبحث العلمي، قطاع التربية الوطنية، أن عملية إيداع ترشيحات الأحرار لاجتياز امتحانات البكالوريا برسم دورة 2020، والتي تتم حصرا على البوابة الإلكترونية للوزارة،&nbsp;<strong>candidature bac</strong>&nbsp;، قد انطلقت&nbsp;<strong>ابتداء من يومه الاثنين 04 نونبر2019، وستستمر إلى غاية&nbsp;يوم الأربعاء 04 دجنبر 2019، كآخر أجل للترشيح.</strong></p>\r\n\r\n<p dir=\"rtl\">ويجدر التذكير، بأن الترشيح لاجتياز امتحانات البكالوريا برسم دورة 2020 بصفة &ldquo;مترشح حر&rdquo; يخضع لنفس شروط الدورات السابقة، وهي كالتالي:</p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li>إنهاء الدراسة بالسلك الثانوي الإعدادي، منذ ما لا يقل عن سنتين في بداية سنة الترشيح بالنسبة لغير الحاصلين على البكالوريا في دورات سابقة؛</li>\r\n	<li>الترشح في شعبة لم يسبق الحصول فيها أو في إحدى مسالكها على شهادة البكالوريا بالنسبة للحاصلين على هذه الشهادة في إحدى الدورات السابقة؛</li>\r\n	<li>ألا يكون المترشح الحر قد تغيب عن اجتياز الاختبارات الخاصة بهذه الامتحانات، خلال دورة من دورات السنوات الماضية بدون مبرر مقبول، وفي هذه الحالة لا يقبل الترشيح إلا بعد انصرام سنتين عن آخر دورة تغيب فيها المترشح؛</li>\r\n	<li>ألا يتجاوز عدد الدورات التي اجتازها المترشح ثلاث دورات متتالية، وفي حالة استنفادها لا يمكن الترشيح مجدداً إلا بعد انصرام سنتين عن آخر دورة اجتازها المترشح؛</li>\r\n	<li>التسجيل عبر البوابة الإلكترونية المخصصة للترشيحات داخل الآجال المحددة لذلك، مع تضمين البطاقة الإلكترونية للترشيح صورة حديثة العهد للمترشح(ة)؛</li>\r\n	<li>إيداع ملف الترشيح الورقي بالمديرية الإقليمية التابع لها محل سكن المترشح، وذلك في أجل أقصاه&nbsp;<strong>06&nbsp;دجنبر 2019</strong>، على أن يرفق هذا الملف بوصل الترشيح المستخرج من البوابة الإلكترونية؛</li>\r\n	<li>تضمين ملف الترشيح التزاماً مصادقاً على صحة توقيعه يقر فيه المترشح باطلاعه على القوانين الخاصة بزجر الغش في الامتحانات المدرسية والتزامه بمقتضياتها، خاصة القانون&nbsp;<strong>رقم 02.13 بتاريخ 25 غشت 2016.</strong></li>\r\n</ul>\r\n\r\n<p dir=\"rtl\">هذا، ويتعين على المترشحين الأحرار في وضعية إعاقة، والراغبين في الاستفادة من إجراءات تكييف مواضيع الاختبارات وظروف الإجراء والتصحيح، إرفاق ملفات ترشيحهم بطلب في الموضوع معزز بملف صحي يثبت الإعاقة.</p>\r\n\r\n<p dir=\"rtl\">وستعمل الوزارة، على نشر اللوائح المؤقتة للمترشحين الأحرار المقبولين لاجتياز امتحانات البكالوريا&nbsp;<strong>قبل 24 دجنبر 2019،</strong>&nbsp;على أن تخصص الفترة الممتدة من&nbsp;<strong>26 دجنبر 2019 إلى 03 يناير 2020&nbsp;</strong>لتقديم الشكايات إلى المديريات الإقليمية بالنسبة للترشيحات التي لم يتم قبولها وكذا طلبات إلغاء الترشيح بالنسبة للمترشحين الراغبين في ذلك.</p>\r\n\r\n<p dir=\"rtl\">وسيتم نشر اللوائح النهائية للمترشحين الأحرار المقبولين لاجتياز امتحانات البكالوريا برسم دورة 2020،&nbsp;<strong>يوم&nbsp;31&nbsp;يناير 2020</strong>، ويمكن للمترشحين المسجلين تتبع مسار ووضعية طلبات ترشيحهم عبر البوابة الإلكترونية للوزارة .</p>\r\n', 19, 'fr', '2019-11-19 19:44:52', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categ` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categ`, `category`, `lang`) VALUES
(5, 'الدراسة بالخارج', 'ar'),
(6, 'توجيه', 'ar'),
(7, 'الشباب', 'ar'),
(8, 'الدروس', 'ar'),
(9, 'نصائح', 'ar'),
(10, 'احداث', 'ar'),
(11, 'متنوعة', 'ar');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_com` int(11) NOT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `image`, `id_article`) VALUES
(75, '5dd43ed89541c9.03184127.jpg', 100),
(76, '5dd43fe6099171.47542457.jpg', 101),
(77, '5dd441ec40d033.56159512.jpg', 102),
(78, '5dd444d4de7d89.29287015.jpeg', 103),
(79, '5dd446345c2f33.49092837.jpg', 104);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id_s_categ` int(11) NOT NULL,
  `sous_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_categ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id_s_categ`, `sous_category`, `id_categ`) VALUES
(11, 'فرنسا', 5),
(12, 'المانيا', 5),
(13, 'قبل الباك', 6),
(14, 'بعد الباك', 6);

-- --------------------------------------------------------

--
-- Structure de la table `sous_sous_categories`
--

CREATE TABLE `sous_sous_categories` (
  `id_s_scateg` int(11) NOT NULL,
  `sous_sous_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_s_categ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sous_sous_categories`
--

INSERT INTO `sous_sous_categories` (`id_s_scateg`, `sous_sous_category`, `id_s_categ`) VALUES
(17, '2020', 11),
(18, 'توجيه', 14),
(19, 'توجيه', 13);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id_tag` int(11) NOT NULL,
  `name_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id_tag`, `name_tag`, `id_article`) VALUES
(128, 'Amsterdam', 100),
(129, 'Washington', 100),
(130, 'فرنسا?', 100),
(131, 'منح دراسية مجانية', 100),
(132, 'شباب', 100),
(133, 'نظام تعليمي جد متطور', 100),
(134, 'Amsterdam', 101),
(135, 'Washington', 101),
(136, 'Amsterdam', 102),
(137, 'Washington', 102),
(138, 'Amsterdam', 103),
(139, 'Washington', 103),
(140, 'Amsterdam', 104),
(141, 'Washington', 104);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `type`) VALUES
(5, 'hamza essolami', 'essolamih@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categ`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `coment_article` (`id_article`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id_s_categ`),
  ADD KEY `categ1` (`id_categ`);

--
-- Index pour la table `sous_sous_categories`
--
ALTER TABLE `sous_sous_categories`
  ADD PRIMARY KEY (`id_s_scateg`),
  ADD KEY `categ2` (`id_s_categ`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`),
  ADD KEY `tag_article` (`id_article`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id_s_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `sous_sous_categories`
--
ALTER TABLE `sous_sous_categories`
  MODIFY `id_s_scateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `coment_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `coment_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`);

--
-- Contraintes pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `categ1` FOREIGN KEY (`id_categ`) REFERENCES `categories` (`id_categ`);

--
-- Contraintes pour la table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tag_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
