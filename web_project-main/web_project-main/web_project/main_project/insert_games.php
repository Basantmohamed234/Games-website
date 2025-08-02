<?php
// بيانات الاتصال بقاعدة البيانات
$conn = new mysqli('localhost', 'root', '', 'my project');

// التأكد من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// مصفوفة تحتوي على البيانات
$games = [
  [
    "title" => "الملاكمه",
    "category" => "العاب قتال",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/2d-knockout.jpg",
    "description" => "لعبة ملاكمة قوية، حارب خصمك واضربه باللكمات القاضية.",
    "howToPlay" => "استخدم الأسهم للضرب والحركة والمسافة للدفاع.",
  ],
  [
    "title" => "Farm Frenzy 3",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/farm-frenzy-3.jpg",
    "description" => "ادارة مزرعة ممتعة، قم بإطعام الحيوانات وجمع المنتجات.",
    "howToPlay" => "استخدم الفأرة لاختيار العناصر وإدارتها.",
  ],
  [
    "title" => "كره البولينج",
    "category" => "العاب رياضية",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/bowling-4.jpg",
    "description" => "اضرب جميع القوارير بأقل عدد من الرميات.",
    "howToPlay" => "اسحب الكرة باستخدام الفأرة وحدد الاتجاه والقوة.",
  ],
  [
    "title" => "السباق",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/racing.jpg",
    "description" => "تنافس في سباقات مثيرة ضد خصومك.",
    "howToPlay" => "استخدم الأسهم للتحكم في السيارة.",
  ],
  [
    "title" => "السباق السريع",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/speed-racer.jpg",
    "description" => "سباق سريع ومليء بالتحديات.",
    "howToPlay" => "استخدم الأسهم للتحكم في السيارة.",
  ],
  [
    "title" => "قناص افغانستان",
    "category" => "العاب قتال",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/alien-attack.jpg",
    "description" => "حارب الأعداء في بيئة مليئة بالتحديات.",
    "howToPlay" => "استخدم الفأرة للتصويب والضرب.",
  ],
  [
    "title" => "صيد القرود",
    "category" => "العاب مضحكة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/thirty-second-monkey-hunt.jpg",
    "description" => "قم بصيد أكبر عدد ممكن من القرود في 30 ثانية.",
    "howToPlay" => "انقر على القرود بسرعة باستخدام الفأرة.",
  ],
  [
    "title" => "Shooting Hoops",
    "category" => "العاب حربية",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/shooting-hoops.jpg",
    "description" => "ادخل الكرة في السلة بأكبر عدد ممكن.",
    "howToPlay" => "انقر واسحب لتحديد قوة واتجاه الرمية.",
  ],
  [
    "title" => "Football",
    "category" => "العاب رياضية",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/soccer-pong.jpg",
    "description" => "كرة قدم بنمط البونغ، احرز الأهداف وتجنب الخسارة.",
    "howToPlay" => "استخدم الأسهم لتحريك المضرب وصد الكرة.",
  ],
  [
    "title" => "Hunter",
    "category" => "العاب حربية",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/r-shot.jpg",
    "description" => "صوب نحو الأهداف المتحركة وحقق أعلى النقاط.",
    "howToPlay" => "استخدم الفأرة للتصويب والنقر لإطلاق النار.",
  ],
  [
    "title" => "الضرب بالعصا",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/ant-ken-do.jpg",
    "description" => "قاتل خصمك باستخدام العصا في معركة تقليدية.",
    "howToPlay" => "استخدم الأسهم والمسافة لتنفيذ الهجمات والدفاع.",
  ],
  [
    "title" => "الطاوله المتحركه",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/g-ball.jpg",
    "description" => "حرك الكرة فوق الطاولة بدون أن تسقط.",
    "howToPlay" => "استخدم الأسهم للتحكم في الكرة.",
  ],
  [
      "title" => "تساقط المربعات",
      "category" => "العاب منوعة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/collinks.jpg",
      "description" => "رتب المربعات بنفس اللون للتخلص منها وكسب النقاط.",
      "howToPlay" => "اسحب وأسقط المربعات باستخدام الفأرة.",
  ],
  [
      "title" => "اصطياد الدلافين",
      "category" => "العاب منوعة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/get-flippy.jpg",
      "description" => "لعبة ممتعة تتطلب منك اصطياد الدلافين بسرعة ودقة.",
      "howToPlay" => "استخدم الماوس للنقر على الدولفين عند ظهوره.",
  ],
  [
      "title" => "النملة",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/the-ant-arena.jpg",
      "description" => "قاتل النمل الآخر وابقَ حيًا لأطول فترة ممكنة.",
      "howToPlay" => "حرك النملة بالأسهم واضغط على المسافة للهجوم.",
  ],
  [
      "title" => "حرامي السيارات",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/grand-shift-auto.jpg",
      "description" => "استولِ على السيارات في المدينة وتجنب الشرطة.",
      "howToPlay" => "استخدم الأسهم للحركة وادخل السيارات بالنقر عليها.",
  ],
  [
      "title" => "رجل المافيا",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/miami-crime-simulator-3d.jpg",
      "description" => "قم بمهام العصابة وسيطر على المدينة.",
      "howToPlay" => "تحرك باستخدام WASD واضغط على F للتفاعل.",
  ],
  [
      "title" => "كرانكر",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/krunker-io.jpg",
      "description" => "لعبة تصويب أونلاين سريعة ومليئة بالتحدي.",
      "howToPlay" => "استخدم الماوس للتصويب والزر الأيسر لإطلاق النار.",
  ],
  [
      "title" => "مهمة قناص",
      "category" => "العاب رياضية",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/sniper-mission-3d.jpg",
      "description" => "اقتل الأعداء من بعيد باستخدام بندقية القنص.",
      "howToPlay" => "استخدم الماوس للتصويب وSpace للتكبير.",
  ],
  [
      "title" => "وادي الذئاب",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/valley-of-the-wolves.jpg",
      "description" => "حارب العصابات وحقق العدالة.",
      "howToPlay" => "استخدم لوحة المفاتيح للتحرك والهجوم.",
  ],
  [
      "title" => "قناص الجنود",
      "category" => "العاب مهارة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/army-sniper.jpg",
      "description" => "اقنص الجنود الأعداء بدقة قبل أن يروك.",
      "howToPlay" => "استعمل الماوس للتصويب والزر الأيسر لإطلاق النار.",
  ],
  [
      "title" => "الزومبي الغبي",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/stupid-zombies.jpg",
      "description" => "اقتل الزومبي بأقل عدد من الطلقات.",
      "howToPlay" => "استخدم الماوس لتحديد زاوية الإطلاق.",
  ],
  [
      "title" => "السنفور الغضبان",
      "category" => "العاب منوعة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/smurphin-for-brooklyn.jpg",
      "description" => "ساعد السنفور في القضاء على الأعداء في المدينة.",
      "howToPlay" => "استخدم الأسهم للحركة وSpace للهجوم.",
  ],
  [
      "title" => "الوحش الأحمر",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/red-monster.jpg",
      "description" => "اقفز فوق العقبات واهزم الأعداء بقدراتك.",
      "howToPlay" => "استخدم الأسهم للقفز والتحرك، وX للهجوم.",
  ],
  [
      "title" => "قتال الزومبي",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/zombocalypse.jpg",
      "description" => "اقتل موجات الزومبي وابقَ حيًا.",
      "howToPlay" => "WASD للحركة، Space للقفز، الماوس للتصويب.",
  ],
  [
      "title" => "الرجل الإرهابي",
      "category" => "العاب حربية",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/mass-mayhem-4.jpg",
      "description" => "دمر كل شيء من حولك بمعداتك الحربية.",
      "howToPlay" => "تحرك بالأسهم واضغط Enter للهجوم.",
  ],
  [
      "title" => "زومبي رويال",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/zombs-royale.jpg",
      "description" => "لعبة معركة بقاء في عالم الزومبي.",
      "howToPlay" => "استخدم الماوس ولوحة المفاتيح للتحكم في اللاعب، واقضِ على الزومبي للبقاء حيًا.",
  ],
  [
      "title" => "صيادو الزومبي",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/zombie-hunters.jpg",
      "description" => "انضم لفريق صائدي الزومبي وحرر المدينة.",
      "howToPlay" => "تحرك باستخدام الأسهم أو WASD، أطلق النار بزر الماوس.",
  ],
  [
      "title" => "معركة الساحل",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/battle-coast.jpg",
      "description" => "دافع عن الساحل من الأعداء.",
      "howToPlay" => "استخدم الفأرة لتصويب وإطلاق النار على الأعداء.",
  ],
  [
      "title" => "Jack Frost",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/jack-frost.jpg",
      "description" => "ساعد جاك فروست في تجميد كل شيء.",
      "howToPlay" => "تحرك وقفز باستخدام الأسهم وجمّد الأعداء.",
  ],
  [
      "title" => "Forest Temple",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/forest-temple.jpg",
      "description" => "مغامرة رائعة في معبد الغابة.",
      "howToPlay" => "استخدم الأسهم وWASD لتحريك الشخصيتين.",
  ],
  [
      "title" => "بوب الحرامي",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/bob-the-robber.jpg",
      "description" => "ساعد بوب في تنفيذ سرقاته بدون أن يُكشف.",
      "howToPlay" => "استخدم الأسهم للتحرك، وافتح الأبواب بسرية.",
  ],
  [
      "title" => "انا و اليس",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/frozen-double-trouble.jpg",
      "description" => "مغامرة ثنائية مع آنا وأليس",
      "howToPlay" => "تحكم في كل شخصية باستخدام لوحة المفاتيح لتخطي العقبات.",
  ],
  [
      "title" => "سوبر ماريو",
      "category" => "العاب بازل",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/super-flash-mario-bros.jpg",
      "description" => "نسخة كلاسيكية من لعبة سوبر ماريو الشهيرة",
      "howToPlay" => "تحرك باستخدام الأسهم واقفز وتجنب الأعداء.",
  ],
  [
      "title" => "سمكه القرش",
      "category" => "العاب مغامرات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/shark-io.jpg",
      "description" => "كل وأكبر لتصبح قرشاً ضخماً",
      "howToPlay" => "استخدم الماوس للتحكم في حركة القرش، وابتلع الأسماك الأخرى.",
  ],
  [
      "title" => "برج الفقاعات",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/bubble-tower.jpg",
      "description" => "ابنِ برجك باستخدام الفقاعات في لعبة ممتعة ومسلية.",
      "howToPlay" => "استخدم الماوس لتوجيه الفقاعات وإسقاطها في المكان المناسب.",
  ],
  [
      "title" => "حلوي البوب",
      "category" => "العاب بنات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/pop-pop-candies.jpg",
      "description" => "طابق الحلويات المتشابهة لجمع النقاط!",
      "howToPlay" => "استخدم الماوس لسحب وإفلات الحلويات المتشابهة بجانب بعضها.",
  ],
  [
      "title" => "توم يعبر النهر",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/tom-and-jerry---cat-crossing.jpg",
      "description" => "ساعد توم في عبور النهر دون السقوط.",
      "howToPlay" => "تحرك باستخدام الأسهم لتجنب السقوط في الماء.",
  ],
  [
      "title" => "ليلي والذئب",
      "category" => "العاب بنات",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/little-red-cap-differences.jpg",
      "description" => "اكتشف الفروقات بين الصور في مغامرة ليلي والذئب.",
      "howToPlay" => "انقر على الفروقات باستخدام الماوس.",
  ],
  [
      "title" => "البط المقاتل",
      "category" => "العاب حربية",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/duck-dodgers.jpg",
      "description" => "خض معركة الفضاء مع البط الشجاع!",
      "howToPlay" => "استخدم الأسهم للتحرك، والمسافة لإطلاق النار.",
  ],
  [
      "title" => "محل العاب",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg",
      "description" => "قم بإدارة محل الألعاب واحصل على رضا الزبائن.",
      "howToPlay" => "استخدم الماوس لتقديم الألعاب المناسبة للعملاء.",
  ],
  [
      "title" => "عنقود العنب",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg",
      "description" => "اجمع عناقيد العنب في لعبة ذكاء سريعة.",
      "howToPlay" => "انقر لتطابق العنب المتشابه وتحقق النقاط.",
  ],
  [
      "title" => "هبوط القرد",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/monkey-lander.jpg",
      "description" => "ساعد القرد على الهبوط بأمان.",
      "howToPlay" => "استخدم الأسهم لتوجيه المركبة بحذر نحو الأرض.",
  ],
  [
      "title" => "ضرب الكف",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg",
      "description" => "كن ملك الصفعات واهزم خصمك!",
      "howToPlay" => "انقر في التوقيت المناسب للحصول على أقوى صفعة.",
  ],
  [
      "title" => "الموعد الاول",
      "category" => "العاب مضحكة",
      "image" => "https://cdn.ttt4.com/maher/images/thumbnail/the-first-date.jpg",
      "description" => "ساعد الشخصيات لتحضير أنفسهم لأول موعد.",
      "howToPlay" => "استخدم الماوس لاختيار الملابس والاكسسوارات.",
  ],
  [
    "title" => "البروسلي",
    "category" => "العاب حربية",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/brucele-movie.jpg",
    "description" => "قاتل مثل بروسلي واهزم الأعداء بأسلوب فنون القتال.",
    "howToPlay" => "استخدم الأسهم و Z و X للركل واللكم."
],
[
    "title" => "الهروب من السجن",
    "category" => "العاب مهارة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/jail-break-rush.jpg",
    "description" => "خطط للهروب من السجن وتفادى الحراس.",
    "howToPlay" => "استخدم الماوس أو لوحة المفاتيح للتفاعل مع البيئة والهروب."
],
[
    "title" => "نعم و لا",
    "category" => "العاب مهارة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/defend-your-castle.jpg",
    "description" => "دافع عن قلعتك بأي وسيلة ممكنة!",
    "howToPlay" => "انقر على الأعداء لرميهم بعيدًا."
],
[
    "title" => "انقاذ السمك الذهبي",
    "category" => "العاب مهارة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/save-them-goldfish.jpg",
    "description" => "انقذ السمك الذهبي قبل أن يُؤكل!",
    "howToPlay" => "اضغط بسرعة لتحرير السمك من المصيدة."
],
[
    "title" => "Jack Frost",
    "category" => "العاب مهارة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/jack-frost.jpg",
    "description" => "ساعد جاك فروست في تجميد الأعداء والوصول لنهاية المرحلة.",
    "howToPlay" => "استخدم الأسهم للحركة و X للتجميد."
],
[
    "title" => "Forest Temple",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/forest-temple.jpg",
    "description" => "ساعد الفتى والنار والفتاة والماء في حل الألغاز والخروج من المعبد.",
    "howToPlay" => "استخدم الأسهم وWASD للتحكم في الشخصيتين."
],
[
    "title" => "بوب الحرامي",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/bob-the-robber.jpg",
    "description" => "ساعد بوب في سرقة الأغراض دون أن يُكشف أمره.",
    "howToPlay" => "استخدم الأسهم للحركة، والمسافة للقيام بالمهام."
],
[
    "title" => "أنا و أليس",
    "category" => "العاب بنات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/frozen-double-trouble.jpg",
    "description" => "ساعد أبطال فروزن في التغلب على التحديات.",
    "howToPlay" => "استخدم الأسهم وWASD للتحكم في الشخصيتين."
],
[
    "title" => "سوبر ماريو",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/super-flash-mario-bros.jpg",
    "description" => "انطلق في مغامرة ماريو للقفز وجمع العملات وإنقاذ الأميرة.",
    "howToPlay" => "استخدم الأسهم للقفز والحركة، والمسافة للهجوم."
],
[
    "title" => "سمكة القرش",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/shark-io.jpg",
    "description" => "تحكم في سمكة القرش وافترس الأسماك الأخرى.",
    "howToPlay" => "استخدم الماوس أو الأسهم للتحكم في الحركة."
],
[
    "title" => "بات مان",
    "category" => "العاب منوعة",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/batman-in-cobblebot-caper.jpg",
    "description" => "ساعد باتمان في التغلب على الأشرار وإنقاذ المدينة.",
    "howToPlay" => "استخدم الأسهم للحركة والمسافة للهجوم."
],
[
    "title" => "موتو اكس 3",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/moto-x3m-3.jpg",
    "description" => "تحدى المسارات الخطيرة وتخطى العقبات بسرعة في موتو X3M.",
    "howToPlay" => "استخدم الأسهم للتحكم في الدراجة النارية."
],
[
    "title" => "Angry Race",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/furious-racing-3d.jpg",
    "description" => "انطلق بسرعة ونافس في سباقات شرسة ثلاثية الأبعاد.",
    "howToPlay" => "استخدم الأسهم للقيادة والمسطرة للنيترو."
],
[
    "title" => "الشاحنة الهندية",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/indian-truck-simulator-3d.jpg",
    "description" => "قد شاحنتك في طرق الهند الوعرة وأوصل الشحنة بسلام.",
    "howToPlay" => "استخدم الأسهم للتحكم في الشاحنة."
],
[
    "title" => "سواق نيويورك",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/free-new-york-taxi-driver-3d-sim.jpg",
    "description" => "اجعل الركاب يصلون إلى وجهاتهم في شوارع نيويورك المزدحمة.",
    "howToPlay" => "استخدم الأسهم للقيادة وتوقف عند المحطات."
],
[
    "title" => "جراج سيارات",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/car-parking.jpg",
    "description" => "اختبر مهاراتك في ركن السيارات بدقة.",
    "howToPlay" => "استخدم الأسهم لتحريك السيارة دون الاصطدام."
],
[
    "title" => "باص الجبال",
    "category" => "العاب سيارات",
    "image" => "https://cdn.ttt4.com/maher/images/thumbnail/indian-uphill-bus.jpg",
    "description" => "قد الباص في المرتفعات وتجنب السقوط.",
    "howToPlay" => "استخدم الأسهم للتحكم في الباص."
],
[
  "title" => "سيارات مادلين",
  "category" => "العاب سيارات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/madalin-cars-multiplayer.jpg",
  "description" => "شارك في سباقات متعددة اللاعبين مع سيارات فائقة السرعة.",
  "howToPlay" => "استخدم الأسهم للتحكم وسيطر على السباق."
],
[
  "title" => "حرامي السيارات",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/grand-shift-auto.jpg",
  "description" => "انطلق في مغامرات حرامي السيارات في المدينة المفتوحة!",
  "howToPlay" => "استخدم الأسهم أو WASD للتحرك، والمسافة للقفز، والفأرة للتفاعل."
],
[
  "title" => "رجل المافيا",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/miami-crime-simulator-3d.jpg",
  "description" => "عش دور رجل العصابة في شوارع ميامي.",
  "howToPlay" => "تحكم باستخدام الأسهم أو WASD، واستخدم الفأرة للتصويب وإطلاق النار."
],
[
  "title" => "كرانكر",
  "category" => "العاب بازل",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/krunker-io.jpg",
  "description" => "لعبة تصويب سريعة عبر الإنترنت مع لاعبين آخرين.",
  "howToPlay" => "استخدم الفأرة للتصويب والزر الأيسر لإطلاق النار، وWASD للحركة."
],
[
  "title" => "مهمه قناص",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/sniper-mission-3d.jpg",
  "description" => "قم بمهام قنص دقيقة ضد الأعداء.",
  "howToPlay" => "استخدم الفأرة للتصويب، والنقر للإطلاق، وWASD للتحرك."
],
[
  "title" => "وادي الذئاب",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/valley-of-the-wolves.jpg",
  "description" => "حارب الأعداء في مغامرة مستوحاة من وادي الذئاب.",
  "howToPlay" => "استخدم لوحة المفاتيح والفأرة للعب."
],
[
  "title" => "قناص الجنود",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/army-sniper.jpg",
  "description" => "كن قناص الجيش وخلص المهام الصعبة.",
  "howToPlay" => "تصويب بالفأرة، وحركة بلوحة المفاتيح."
],
[
  "title" => "الزومبي الغبي",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/stupid-zombies.jpg",
  "description" => "اقضِ على الزومبي بتخطيط ذكي وطلقات محدودة.",
  "howToPlay" => "استخدم الفأرة لتوجيه الطلقات نحو الزومبي."
],
[
  "title" => "السنفور الغضبان",
  "category" => "العاب مغامرات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/smurphin-for-brooklyn.jpg",
  "description" => "السنفور الغضبان يواجه التحديات في شوارع بروكلين.",
  "howToPlay" => "العب باستخدام لوحة المفاتيح وتخطى العقبات."
],
[
  "title" => "الوحش الاحمر",
  "category" => "العاب قتال",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/red-monster.jpg",
  "description" => "ساعد الوحش الأحمر في مواجهة أعدائه.",
  "howToPlay" => "تحكم فيه باستخدام الأسهم وتفادى العقبات."
],
[
  "title" => "قتال الزومبي",
  "category" => "العاب قتال",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/zombocalypse.jpg",
  "description" => "اقتُل موجات من الزومبي في معركة لا تنتهي.",
  "howToPlay" => "استخدم WASD للتحرك والمسافة للهجوم."
],
[
  "title" => "الرجل الارهابي",
  "category" => "العاب قتال",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/mass-mayhem-4.jpg",
  "description" => "فجر كل شيء في طريقك مع هذه اللعبة المجنونة.",
  "howToPlay" => "تحرك بالأسهم واستخدم الفأرة للهجوم."
],
[
  "title" => "فتي النينجا",
  "category" => "العاب قتال",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/3-foot-ninja.jpg",
  "description" => "قاتل الأعداء في مغامرات نينجا سريعة.",
  "howToPlay" => "استخدم لوحة المفاتيح لتنفيذ حركات النينجا."
],
[
  "title" => "قناص الخيال",
  "category" => "العاب مهارة",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/fantasy-sniper.jpg",
  "description" => "استهدف المخلوقات الخيالية في عالم ملحمي.",
  "howToPlay" => "صوب باستخدام الفأرة وأطلق النار."
],
[
  "title" => "ضرب الكف",
  "category" => "العاب مهارة",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg",
  "description" => "ادخل في منافسات الضرب بالكف وكن الملك!",
  "howToPlay" => "استخدم الفأرة لتوجيه الضربات في الوقت المناسب."
],
[
  "title" => "الموعد الاول",
  "category" => "العاب بنات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/the-first-date.jpg",
  "description" => "ساعد الشخصيتين في إنجاح أول موعد لهما.",
  "howToPlay" => "استخدم الفأرة للتفاعل مع الخيارات المختلفة."
],
[
  "title" => "البروسلي",
  "category" => "العاب قتال",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/brucele-movie.jpg",
  "description" => "قاتل مثل بروسلي وتغلب على خصومك.",
  "howToPlay" => "تحكم بالحركات القتالية باستخدام لوحة المفاتيح."
],
[
  "title" => "الهروب من السجن",
  "category" => "العاب مهارة",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/jail-break-rush.jpg",
  "description" => "خطط لهروبك من السجن وتجنب الحراس.",
  "howToPlay" => "استخدم الأسهم للحركة وتجنب الكاميرات والعوائق."
],
[
  "title" => "نعم و لا",
  "category" => "العاب مهارة",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/defend-your-castle.jpg",
  "description" => "دافع عن القلعة بأي وسيلة ممكنة.",
  "howToPlay" => "استخدم الفأرة لرمي الأعداء بعيداً عن القلعة."
],
[
  "title" => "انقاذ السمك الذهبي",
  "category" => "العاب مهارة",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/save-them-goldfish.jpg",
  "description" => "أنقذ السمك الذهبي قبل أن ينفذ الوقت.",
  "howToPlay" => "استخدم الفأرة لنقل السمك إلى الأمان بسرعة."
],
[
  "title" => "شيفه الاحلام",
  "category" => "العاب بنات",
  "image" => "https://cdn.ttt4.com/maher/images/thumbnail/dream-chefs.jpg",
  "description" => "ساعدي الشيفه في تحضير الأكلات وتقديم الطلبات للعملاء في أسرع وقت.",
  "howToPlay" => "استخدمي الماوس لاختيار الأدوات وتحضير الأكل."
],
[
"title" => "الكعب العالي",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/kakato-otoshi.jpg",
"description" => "تخلصي من الكعب العالي للوصول إلى الأرض بأمان.",
"howToPlay" => "استخدمي الماوس أو لوحة المفاتيح لضرب الكعب وتقصيره."
],
[
"title" => "دمج الكيك",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/merge-cakes.jpg",
"description" => "ادمجي الكعكات المتشابهة للحصول على كعكة أكبر.",
"howToPlay" => "انقري واسحبي الكعكات لدمجها مع بعض."
],
[
"title" => "صالون حاقه",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/funny-hair-salon.jpg",
"description" => "اصنعي تسريحات مضحكة وغريبة للزبائن في الصالون.",
"howToPlay" => "استخدمي الأدوات المختلفة لقص وصبغ وتصفيف الشعر."
],
[
"title" => "محل العرائس",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/wedding-shoppe.jpg",
"description" => "اختاري أجمل الفساتين والإكسسوارات للعروسة في يومها الكبير.",
"howToPlay" => "استخدمي الماوس لاختيار الملابس وتلبيس العروسة."
],
[
"title" => "يوم المرح",
"category" => "العاب مضحكة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/baby-frozen-fun-day.jpg",
"description" => "اقضي يومًا ممتعًا مع الطفلة الصغيرة في العديد من الأنشطة المرحة.",
"howToPlay" => "اتبعي التعليمات على الشاشة للعب مع الطفلة والعناية بها."
],
[
"title" => "توم يعبر النهر",
"category" => "العاب مضحكة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/tom-and-jerry---cat-crossing.jpg",
"description" => "ساعد توم في عبور النهر دون أن يسقط في الماء.",
"howToPlay" => "استخدم الأسهم للتحكم في توم والقفز على الألواح العائمة."
],
[
"title" => "ليلي والذئب",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/little-red-cap-differences.jpg",
"description" => "اكتشف الفروقات بين الصور في قصة ليلي والذئب.",
"howToPlay" => "انقر على الفروقات في الصورة بأسرع ما يمكن."
],
[
"title" => "البط المقاتل",
"category" => "العاب قتال",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/duck-dodgers.jpg",
"description" => "حارب الأعداء في الفضاء مع البط المقاتل.",
"howToPlay" => "استخدم لوحة المفاتيح لإطلاق النار والتحرك."
],
[
"title" => "محل العاب",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg",
"description" => "قم بإدارة محل الألعاب وساعد الزبائن في شراء ألعابهم المفضلة.",
"howToPlay" => "استخدم الماوس لتحديد الألعاب وتقديمها للعملاء."
],
[
"title" => "عنقود العنب",
"category" => "العاب مهارة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg",
"description" => "ساعد في تجميع حبات العنب بطريقة صحيحة.",
"howToPlay" => "انقر واسحب لربط العنب المتشابه معًا."
],
[
"title" => "هبوط القرد",
"category" => "العاب مضحكة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/monkey-lander.jpg",
"description" => "ساعد القرد في الهبوط الآمن على الكوكب.",
"howToPlay" => "استخدم الأسهم لتوجيه المركبة وتجنب العقبات."
],
[
"title" => "اكس او",
"category" => "العاب مهارة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/tic-tac-toe.jpg",
"description" => "العب لعبة إكس أو الكلاسيكية ضد الكمبيوتر أو صديق.",
"howToPlay" => "انقر على الخانة المناسبة لوضع X أو O."
],
[
"title" => "كاندي كراش",
"category" => "العاب بازل",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/candy-crush.jpg",
"description" => "طابق الحلوى المتشابهة للحصول على نقاط عالية.",
"howToPlay" => "اسحب الحلوى لتشكيل صفوف أو أعمدة من نفس النوع."
],
[
"title" => "تن تربكس",
"category" => "العاب مهارة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/tentrix.jpg",
"description" => "قم بترتيب القطع على اللوحة لملء الصفوف والأعمدة.",
"howToPlay" => "اسحب القطع وضعها في المكان المناسب لإكمال الخطوط."
],
[
"title" => "مدفع كرات السله",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/cannon-basketball-4.jpg",
"description" => "أطلق الكرة من المدفع وحاول تسجيلها في السلة.",
"howToPlay" => "اضبط الزاوية والقوة ثم اضغط للإطلاق."
],
[
"title" => "برج الفقاعات",
"category" => "العاب مهارة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/bubble-tower.jpg",
"description" => "ابنِ برجًا من الفقاعات دون أن يسقط.",
"howToPlay" => "انقر لإسقاط الفقاعات فوق بعضها البعض."
],
[
"title" => "حلوي البوب",
"category" => "العاب بنات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/pop-pop-candies.jpg",
"description" => "فقع الحلوى المتشابهة لتفريغ الشاشة والحصول على النقاط.",
"howToPlay" => "انقر على مجموعات الحلوى المتشابهة لتفجيرها."
],
[
"title" => "صب واي سيرف",
"category" => "العاب مهارة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/subway-surf.jpg",
"description" => "اهرب من المفتش والكلب في مغامرة لا نهائية على السكة الحديدية!",
"howToPlay" => "استخدم الأسهم أو الماوس للقفز والانزلاق وتجنب العقبات."
],
[
"title" => "الدودة",
"category" => "العاب مهارة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/wormate-io.jpg",
"description" => "التهم الحلوى وكبر حجمك وتجنب الاصطدام بالديدان الأخرى!",
"howToPlay" => "استخدم الماوس أو لوحة المفاتيح للتحكم في حركة الدودة."
],
[
"title" => "فيكس 3",
"category" => "العاب منوعة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/vex-3.jpg",
"description" => "اقفز وتجاوز العقبات في مغامرة منصات مليئة بالتحديات.",
"howToPlay" => "استخدم الأسهم أو WASD للتحرك والقفز."
],
[
"title" => "اقطع الحبل",
"category" => "العاب منوعة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/cut-the-rope-2.jpg",
"description" => "ساعد أوم نوم في الوصول إلى الحلوى عن طريق قطع الحبال بحكمة.",
"howToPlay" => "استخدم الماوس لقطع الحبال والتفاعل مع العناصر في البيئة."
],
[
"title" => "القوس والسهم",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/archery-world-tour.jpg",
"description" => "اختبر مهاراتك في الرماية بالقوس في جولات متعددة حول العالم.",
"howToPlay" => "استخدم الماوس لتحديد الزاوية والقوة، ثم أطلق السهم."
],
[
"title" => "الرجل الراكض",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/vex-3.jpg",
"description" => "اركض بأقصى سرعة وتجاوز جميع العقبات في طريقك.",
"howToPlay" => "تحكم في الحركة بالقفز والانزلاق لتجنب الحواجز."
],
[
"title" => "سيد كره القدم",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/football-masters.jpg",
"description" => "العب مباريات سريعة أو بطولات في كرة القدم مع لاعبين خارقين.",
"howToPlay" => "استخدم الأسهم للتحرك و Z/X للتسديد والتمرير."
],
[
"title" => "نادي الملاكمة",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/celebrity-fight-club.jpg",
"description" => "قاتل نجوم العالم في مباريات ملاكمة شرسة!",
"howToPlay" => "استخدم الأسهم للضرب والتحرك، و Space للدفاع."
],
[
"title" => "دوري الضربات الحرة",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/penalty-shootout-euro-cup-2016.jpg",
"description" => "خض تجربة تصدي أو تسديد ركلات الجزاء في البطولة الأوروبية.",
"howToPlay" => "انقر واسحب لتحديد اتجاه وقوة الضربة."
],
[
"title" => "نجوم كره السله",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/basketball-stars.jpg",
"description" => "اختر نجمك المفضل والعب مباريات كرة سلة ثنائية!",
"howToPlay" => "استخدم الأسهم وZ/X للتسديد والمراوغة."
],
[
"title" => "ضربات جزاء",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/penalty-kicks.jpg",
"description" => "تنافس في تنفيذ وتصدي ضربات الجزاء.",
"howToPlay" => "اختر الزاوية والوقت المناسب للتسديد أو التصدي."
],
[
"title" => "بلياردو",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/mini-pool.jpg",
"description" => "العب البلياردو على طاولة مصغّرة بأسلوب ممتع.",
"howToPlay" => "استخدم الماوس لتوجيه العصا وتحديد القوة."
],
[
"title" => "اسئله عن الرياضه",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/arabic-questions.jpg",
"description" => "اختبر معلوماتك الرياضية من خلال أسئلة ممتعة.",
"howToPlay" => "اختر الإجابة الصحيحة من بين الخيارات المعروضة."
],
[
"title" => "جولف",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/mini-putt.jpg",
"description" => "حاول إدخال الكرة في الحفرة بأقل عدد ضربات.",
"howToPlay" => "استخدم الماوس لتحديد الاتجاه والقوة."
],
[
"title" => "بيسبول",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/pinch-hitter.jpg",
"description" => "أظهر مهاراتك في ضرب كرات البيسبول بدقة.",
"howToPlay" => "اضغط Space في الوقت المناسب لضرب الكرة."
],
[
"title" => "ضرب الكف",
"category" => "العاب منوعة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg",
"description" => "ادخل في معركة ضرب الكف وحاول أن تسقط خصمك بأقوى ضربة.",
"howToPlay" => "اضغط في الوقت المناسب لتنفيذ الضربة."
],
[
"title" => "الرجل الراكض",
"category" => "العاب سباق",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/vex-3.jpg",
"description" => "تحدى العقبات واجتز المراحل بحركات باركور مثيرة.",
"howToPlay" => "استخدم الأسهم للتحرك والقفز وتسلق الجدران."
],
[
"title" => "ضربات جزاء",
"category" => "العاب رياضية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/penalty-kicks.jpg",
"description" => "سدد ضربات الجزاء بدقة للفوز بالمباراة.",
"howToPlay" => "استخدم الماوس لتحديد اتجاه وقوة التسديدة."
],
[
"title" => "كاندي كراش",
"category" => "العاب بازل",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/candy-crush.jpg",
"description" => "قم بترتيب الحلوى المتشابهة للحصول على أعلى النقاط.",
"howToPlay" => "انقر واسحب الحلوى لتبديل أماكنها وتحقيق التطابق."
],
[
"title" => "تن تربكس",
"category" => "العاب منوعة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/tentrix.jpg",
"description" => "املأ الصفوف بالأشكال لتفجيرها وكسب النقاط.",
"howToPlay" => "اسحب الأشكال إلى اللوحة ورتبها بذكاء."
],
[
"title" => "محل العاب",
"category" => "العاب منوعة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg",
"description" => "رتب الألعاب في المحل لجذب الزبائن وزيادة الأرباح.",
"howToPlay" => "استخدم الماوس لوضع الألعاب في أماكنها الصحيحة."
],
[
"title" => "عنقود العنب",
"category" => "العاب مضحكة",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg",
"description" => "اجمع حبات العنب المتشابهة قبل نفاد الوقت.",
"howToPlay" => "انقر على العنب المطابق للحصول على نقاط."
],
[
"title" => "حرب",
"category" => "العاب حربية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/warfare-1917.jpg",
"description" => "قد جيشك في معركة شرسة في الحرب العالمية الأولى.",
"howToPlay" => "استخدم الماوس لاختيار الجنود وإرسالهم إلى المعركة."
],
[
"title" => "حرب الدبابات",
"category" => "العاب حربية",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/tanks-battle.jpg",
"description" => "قاتل باستخدام دبابتك وقم بتدمير الأعداء في ساحة المعركة.",
"howToPlay" => "تحكم بالدبابة باستخدام الأسهم وأطلق النار بالماوس."
],
[
"title" => "ديناصور المكسيك",
"category" => "العاب مغامرات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/mexico-rex.jpg",
"description" => "اقتحم المدينة بديناصور شرس ودمر كل شيء في طريقك.",
"howToPlay" => "استخدم الأسهم للتحرك والمسطرة للهجوم."
],
[
"title" => "زومبي رويال",
"category" => "العاب مغامرات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/zombs-royale.jpg",
"description" => "ادخل في معركة ملكية ضد لاعبين آخرين وابقَ آخر من ينجو.",
"howToPlay" => "استخدم لوحة المفاتيح والماوس للتنقل والتصويب."
],
[
"title" => "صيادو الزومبي",
"category" => "العاب مغامرات",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/zombie-hunters.jpg",
"description" => "تعاون مع فريقك للقضاء على موجات الزومبي.",
"howToPlay" => "استخدم WASD للتحرك، والماوس للتصويب وإطلاق النار."
],
[
"title" => "معركه الساحل",
"category" => "العاب قتال",
"image" => "https://cdn.ttt4.com/maher/images/thumbnail/battle-coast.jpg",
"description" => "دافع عن الساحل من الأعداء باستخدام المدافع الثقيلة.",
"howToPlay" => "استخدم الماوس لتحديد الهدف وإطلاق النار."
]
];

// إدخال البيانات في قاعدة البيانات
foreach ($games as $game) {
    $title = $game['title'];
    $category = $game['category'];
    $image = $game['image'];
    $description = $game['description'];
    $howToPlay = $game['howToPlay'];

    // تأكد من الهروب من الأحرف الخاصة في القيم النصية (مثل علامات التنصيص)
    $title = $conn->real_escape_string($title);
    $category = $conn->real_escape_string($category);
    $image = $conn->real_escape_string($image);
    $description = $conn->real_escape_string($description);
    $howToPlay = $conn->real_escape_string($howToPlay);

    // استعلام لإدخال البيانات
    $sql = "INSERT INTO games (title, category, image, description, howToPlay) 
            VALUES ('$title', '$category', '$image', '$description', '$howToPlay')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة اللعبة: $title <br>";
    } else {
        echo "خطأ في إضافة اللعبة: $title " . $conn->error . "<br>";
    }
}

// غلق الاتصال بقاعدة البيانات
$conn->close();
?>
