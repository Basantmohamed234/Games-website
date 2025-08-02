//search
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector(".search-bar input");
    const games = document.querySelectorAll(".game-item");

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            const filter = searchInput.value.toLowerCase();

            games.forEach(game => {
                const title = game.querySelector(".game-title").textContent.toLowerCase();
                game.style.display = title.includes(filter) ? "block" : "none";
            });
        });
    }
});


//ترقيم الصفحات
document.addEventListener("DOMContentLoaded", function () {
    const itemsPerPage = 18;
    const games = document.querySelectorAll(".game-item");
    const pagination = document.querySelector(".pagination");
  
    let currentPage = 1;
    const totalPages = Math.ceil(games.length / itemsPerPage);
  
    function showPage(page) {
      currentPage = page;
      games.forEach((game, index) => {
        game.style.display =
          index >= (page - 1) * itemsPerPage && index < page * itemsPerPage
            ? "block"
            : "none";
      });
      renderPagination();
    }
  
    function renderPagination() {
      pagination.innerHTML = "";
  
      // زر "الصفحة السابقة"
      if (currentPage > 1) {
        const prevBtn = document.createElement("button");
        prevBtn.textContent = "الصفحة السابقة";
        prevBtn.onclick = () => showPage(currentPage - 1);
        pagination.appendChild(prevBtn);
      }
  
      // أرقام الصفحات
      for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.onclick = () => showPage(i);
        if (i === currentPage) btn.style.backgroundColor = "#f60";
        pagination.appendChild(btn);
      }
  
      // زر "الصفحة التالية"
      if (currentPage < totalPages) {
        const nextBtn = document.createElement("button");
        nextBtn.textContent = "الصفحة التالية";
        nextBtn.onclick = () => showPage(currentPage + 1);
        pagination.appendChild(nextBtn);
      }
    }
  
    showPage(1);
  });

// تفاصيل اللعبه
// script.js

// مثال للألعاب
const games = {
  "2d-knockout": {
      title: "الملاكمه",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/2d-knockout.jpg",
      description: "لعبة ملاكمة قوية، حارب خصمك واضربه باللكمات القاضية.",
      howToPlay: "استخدم الأسهم للضرب والحركة والمسافة للدفاع.",
  },
  "farm-frenzy-3": {
      title: "Farm Frenzy 3",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/farm-frenzy-3.jpg",
      description: "ادارة مزرعة ممتعة، قم بإطعام الحيوانات وجمع المنتجات.",
      howToPlay: "استخدم الفأرة لاختيار العناصر وإدارتها.",
  },
  "bowling-4": {
      title: "كره البولينج",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/bowling-4.jpg",
      description: "اضرب جميع القوارير بأقل عدد من الرميات.",
      howToPlay: "اسحب الكرة باستخدام الفأرة وحدد الاتجاه والقوة.",
  },
  "alien-attack": {
      title: "قناص افغانستان",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/alien-attack.jpg",
      description: "حارب الأعداء في بيئة مليئة بالتحديات.",
      howToPlay: "استخدم الفأرة للتصويب والضرب.",
  },
  "thirty-second-monkey-hunt": {
      title: "صيد القرود",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/thirty-second-monkey-hunt.jpg",
      description: "قم بصيد أكبر عدد ممكن من القرود في 30 ثانية.",
      howToPlay: "انقر على القرود بسرعة باستخدام الفأرة.",
  },
  "shooting-hoops": {
      title: "Shooting Hoops",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/shooting-hoops.jpg",
      description: "ادخل الكرة في السلة بأكبر عدد ممكن.",
      howToPlay: "انقر واسحب لتحديد قوة واتجاه الرمية.",
  },
  "soccer-pong": {
      title: "Football",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/soccer-pong.jpg",
      description: "كرة قدم بنمط البونغ، احرز الأهداف وتجنب الخسارة.",
      howToPlay: "استخدم الأسهم لتحريك المضرب وصد الكرة.",
  },
  "r-shot": {
      title: "Hunter",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/r-shot.jpg",
      description: "صوب نحو الأهداف المتحركة وحقق أعلى النقاط.",
      howToPlay: "استخدم الفأرة للتصويب والنقر لإطلاق النار.",
  },
  "ant-ken-do": {
      title: "الضرب بالعصا",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/ant-ken-do.jpg",
      description: "قاتل خصمك باستخدام العصا في معركة تقليدية.",
      howToPlay: "استخدم الأسهم والمسافة لتنفيذ الهجمات والدفاع.",
  },
  "g-ball": {
      title: "الطاوله المتحركه",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/g-ball.jpg",
      description: "حرك الكرة فوق الطاولة بدون أن تسقط.",
      howToPlay: "استخدم الأسهم للتحكم في الكرة.",
  },
  "collinks": {
      title: "تساقط المربعات",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/collinks.jpg",
      description: "رتب المربعات بنفس اللون للتخلص منها وكسب النقاط.",
      howToPlay: "اسحب وأسقط المربعات باستخدام الفأرة.",
  },

  "اصطياد الدولفين": {
      title: "اصطياد الدولفين",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/get-flippy.jpg",
      description: "لعبة ممتعة تتطلب منك اصطياد الدلافين بسرعة ودقة.",
      howToPlay: "استخدم الماوس للنقر على الدولفين عند ظهوره."
  },
  "النمله": {
      title: "النمله",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/the-ant-arena.jpg",
      description: "قاتل النمل الآخر وابقَ حيًا لأطول فترة ممكنة.",
      howToPlay: "حرك النملة بالأسهم واضغط على المسافة للهجوم."
  },
  "حرامي السيارات": {
      title: "حرامي السيارات",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/grand-shift-auto.jpg",
      description: "استولِ على السيارات في المدينة وتجنب الشرطة.",
      howToPlay: "استخدم الأسهم للحركة وادخل السيارات بالنقر عليها."
  },
  "رجل المافيا": {
      title: "رجل المافيا",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/miami-crime-simulator-3d.jpg",
      description: "قم بمهام العصابة وسيطر على المدينة.",
      howToPlay: "تحرك باستخدام WASD واضغط على F للتفاعل."
  },
  "كرانكر": {
      title: "كرانكر",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/krunker-io.jpg",
      description: "لعبة تصويب أونلاين سريعة ومليئة بالتحدي.",
      howToPlay: "استخدم الماوس للتصويب والزر الأيسر لإطلاق النار."
  },
    "مهمه قناص": {
      title: "مهمه قناص",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/sniper-mission-3d.jpg",
      description: "اقتل الأعداء من بعيد باستخدام بندقية القنص.",
      howToPlay: "استخدم الماوس للتصويب وSpace للتكبير."
  },
  "وادي الذئاب": {
      title: "وادي الذئاب",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/valley-of-the-wolves.jpg",
      description: "حارب العصابات وحقق العدالة.",
      howToPlay: "استخدم لوحة المفاتيح للتحرك والهجوم."
  },
  "قناص الجنود": {
      title: "قناص الجنود",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/army-sniper.jpg",
      description: "اقنص الجنود الأعداء بدقة قبل أن يروك.",
      howToPlay: "استعمل الماوس للتصويب والزر الأيسر لإطلاق النار."
  },
  "الزومبي الغبي": {
      title: "الزومبي الغبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/stupid-zombies.jpg",
      description: "اقتل الزومبي بأقل عدد من الطلقات.",
      howToPlay: "استخدم الماوس لتحديد زاوية الإطلاق."
  },
  "السنفور الغضبان": {
      title: "السنفور الغضبان",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/smurphin-for-brooklyn.jpg",
      description: "ساعد السنفور في القضاء على الأعداء في المدينة.",
      howToPlay: "استخدم الأسهم للحركة وSpace للهجوم."
  },
  "الوحش الاحمر": {
      title: "الوحش الاحمر",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/red-monster.jpg",
      description: "اقفز فوق العقبات واهزم الأعداء بقدراتك.",
      howToPlay: "استخدم الأسهم للقفز والتحرك، وX للهجوم."
  },
  "قتال الزومبي": {
      title: "قتال الزومبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/zombocalypse.jpg",
      description: "اقتل موجات الزومبي وابقَ حيًا.",
      howToPlay: "WASD للحركة، Space للقفز، الماوس للتصويب."
  },
  "الرجل الارهابي": {
      title: "الرجل الارهابي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/mass-mayhem-4.jpg",
      description: "دمر كل شيء من حولك بمعداتك الحربية.",
      howToPlay: "تحرك بالأسهم واضغط Enter للهجوم."
  },
  "zombs-royale": {
      title: "زومبي رويال",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/zombs-royale.jpg",
      description: "لعبة معركة بقاء في عالم الزومبي",
      howToPlay: "استخدم الماوس ولوحة المفاتيح للتحكم في اللاعب، واقضِ على الزومبي للبقاء حيًا."
  },
  "zombie-hunters": {
      title: "صيادو الزومبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/zombie-hunters.jpg",
      description: "انضم لفريق صائدي الزومبي وحرر المدينة",
      howToPlay: "تحرك باستخدام الأسهم أو WASD، أطلق النار بزر الماوس."
  },
  "battle-coast": {
      title: "معركه الساحل",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/battle-coast.jpg",
      description: "دافع عن الساحل من الأعداء",
      howToPlay: "استخدم الفأرة لتصويب وإطلاق النار على الأعداء."
  },
  "jack-frost": {
      title: "Jack Frost",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/jack-frost.jpg",
      description: "ساعد جاك فروست في تجميد كل شيء",
      howToPlay: "تحرك وقفز باستخدام الأسهم وجمّد الأعداء."
  },
  "forest-temple": {
      title: "Forest Temple",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/forest-temple.jpg",
      description: "مغامرة رائعة في معبد الغابة",
      howToPlay: "استخدم الأسهم وWASD لتحريك الشخصيتين."
  },
  "bob-the-robber": {
      title: "بوب الحرامي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/bob-the-robber.jpg",
      description: "ساعد بوب في تنفيذ سرقاته بدون أن يُكشف",
      howToPlay: "استخدم الأسهم للتحرك، وافتح الأبواب بسرية."
  },
  "frozen-double-trouble": {
      title: "انا و اليس",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/frozen-double-trouble.jpg",
      description: "مغامرة ثنائية مع آنا وأليس",
      howToPlay: "تحكم في كل شخصية باستخدام لوحة المفاتيح لتخطي العقبات."
  },
  "super-flash-mario-bros": {
      title: "سوبر ماريو",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/super-flash-mario-bros.jpg",
      description: "نسخة كلاسيكية من لعبة سوبر ماريو الشهيرة",
      howToPlay: "تحرك باستخدام الأسهم واقفز وتجنب الأعداء."
  },
  "shark-io": {
      title: "سمكه القرش",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/shark-io.jpg",
      description: "كل وأكبر لتصبح قرشاً ضخماً",
      howToPlay: "استخدم الماوس للتحكم في حركة القرش، وابتلع الأسماك الأخرى."
  },
  "bubble-tower": {
      title: "برج الفقاعات",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/bubble-tower.jpg",
      description: "ابنِ برجك باستخدام الفقاعات في لعبة ممتعة ومسلية.",
      howToPlay: "استخدم الماوس لتوجيه الفقاعات وإسقاطها في المكان المناسب."
  },
  "pop-pop-candies": {
      title: "حلوي البوب",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/pop-pop-candies.jpg",
      description: "طابق الحلويات المتشابهة لجمع النقاط!",
      howToPlay: "استخدم الماوس لسحب وإفلات الحلويات المتشابهة بجانب بعضها."
  },
  "tom-and-jerry---cat-crossing": {
      title: "توم يعبر النهر",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/tom-and-jerry---cat-crossing.jpg",
      description: "ساعد توم في عبور النهر دون السقوط.",
      howToPlay: "تحرك باستخدام الأسهم لتجنب السقوط في الماء."
  },
  "little-red-cap-differences": {
      title: "ليلي والذئب",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/little-red-cap-differences.jpg",
      description: "اكتشف الفروقات بين الصور في مغامرة ليلي والذئب.",
      howToPlay: "انقر على الفروقات باستخدام الماوس."
  },
  "duck-dodgers": {
      title: "البط المقاتل",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/duck-dodgers.jpg",
      description: "خض معركة الفضاء مع البط الشجاع!",
      howToPlay: "استخدم الأسهم للتحرك، والمسافة لإطلاق النار."
  },
  "toy-shop": {
      title: "محل العاب",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg",
      description: "قم بإدارة محل الألعاب واحصل على رضا الزبائن.",
      howToPlay: "استخدم الماوس لتقديم الألعاب المناسبة للعملاء."
  },
  "bunch-of-grapes": {
      title: "عنقود العنب",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg",
       description: "اجمع عناقيد العنب في لعبة ذكاء سريعة.",
      howToPlay: "انقر لتطابق العنب المتشابه وتحقق النقاط."
  },
  "monkey-lander": {
      title: "هبوط القرد",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/monkey-lander.jpg",
      description: "ساعد القرد على الهبوط بأمان.",
      howToPlay: "استخدم الأسهم لتوجيه المركبة بحذر نحو الأرض."
  },
  "slap-king": {
      title: "ضرب الكف",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg",
      description: "كن ملك الصفعات واهزم خصمك!",
      howToPlay: "انقر في التوقيت المناسب للحصول على أقوى صفعة."
  },
  "the-first-date": {
      title: "الموعد الاول",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/the-first-date.jpg",
      description: "ساعد الشخصيات لتحضير أنفسهم لأول موعد.",
      howToPlay: "استخدم الماوس لاختيار الملابس والاكسسوارات."
  },
  "brucele-movie": {
      title: "البروسلي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/brucele-movie.jpg",
      description: "قاتل مثل بروسلي واهزم الأعداء بأسلوب فنون القتال.",
      howToPlay: "استخدم الأسهم و Z و X للركل واللكم."
  },
  "jail-break-rush": {
      title: "الهروب من السجن",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/jail-break-rush.jpg",
      description: "خطط للهروب من السجن وتفادى الحراس.",
      howToPlay: "استخدم الماوس أو لوحة المفاتيح للتفاعل مع البيئة والهروب."
  },
  "defend-your-castle": {
      title: "نعم و لا",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/defend-your-castle.jpg",
      description: "دافع عن قلعتك بأي وسيلة ممكنة!",
      howToPlay: "انقر على الأعداء لرميهم بعيدًا."
  },
  "save-them-goldfish": {
      title: "انقاذ السمك الذهبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/save-them-goldfish.jpg",
      description: "انقذ السمك الذهبي قبل أن يُؤكل!",
      howToPlay: "اضغط بسرعة لتحرير السمك من المصيدة."
  },
  "jack-frost": {
      title: "Jack Frost",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/jack-frost.jpg",
      description: "ساعد جاك فروست في تجميد الأعداء والوصول لنهاية المرحلة.",
      instructions: "استخدم الأسهم للحركة و X للتجميد."
  },
  "forest-temple": {
      title: "Forest Temple",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/forest-temple.jpg",
      description: "ساعد الفتى والنار والفتاة والماء في حل الألغاز والخروج من المعبد.",
      instructions: "استخدم الأسهم وWASD للتحكم في الشخصيتين."
  },
  "bob-the-robber": {
      title: "بوب الحرامي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/bob-the-robber.jpg",
      description: "ساعد بوب في سرقة الأغراض دون أن يُكشف أمره.",
      instructions: "استخدم الأسهم للحركة، والمسافة للقيام بالمهام."
  },
  "frozen-double-trouble": {
      title: "أنا و أليس",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/frozen-double-trouble.jpg",
      description: "ساعد أبطال فروزن في التغلب على التحديات.",
      instructions: "استخدم الأسهم وWASD للتحكم في الشخصيتين."
  },
  "super-flash-mario-bros": {
      title: "سوبر ماريو",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/super-flash-mario-bros.jpg",
      description: "انطلق في مغامرة ماريو للقفز وجمع العملات وإنقاذ الأميرة.",
      instructions: "استخدم الأسهم للقفز والحركة، والمسافة للهجوم."
  },
  "shark-io": {
      title: "سمكة القرش",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/shark-io.jpg",
      description: "تحكم في سمكة القرش وافترس الأسماك الأخرى.",
      instructions: "استخدم الماوس أو الأسهم للتحكم في الحركة."
  },
  "batman-in-cobblebot-caper": {
      title: "بات مان",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/batman-in-cobblebot-caper.jpg",
      description: "ساعد باتمان في التغلب على الأشرار وإنقاذ المدينة.",
      instructions: "استخدم الأسهم للحركة والمسافة للهجوم."
  },
  "moto-x3m-3": {
      title: "موتو اكس 3",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/moto-x3m-3.jpg",
      description: "تحدى المسارات الخطيرة وتخطى العقبات بسرعة في موتو X3M.",
      instructions: "استخدم الأسهم للتحكم في الدراجة النارية."
  },
  "furious-racing-3d": {
      title: "Angry Race",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/furious-racing-3d.jpg",
      description: "انطلق بسرعة ونافس في سباقات شرسة ثلاثية الأبعاد.",
      instructions: "استخدم الأسهم للقيادة والمسطرة للنيترو."
  },
  "indian-truck-simulator-3d": {
      title: "الشاحنة الهندية",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/indian-truck-simulator-3d.jpg",
      description: "قد شاحنتك في طرق الهند الوعرة وأوصل الشحنة بسلام.",
      instructions: "استخدم الأسهم للتحكم في الشاحنة."
  },
  "free-new-york-taxi-driver-3d-sim": {
      title: "سواق نيويورك",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/free-new-york-taxi-driver-3d-sim.jpg",
      description: "اجعل الركاب يصلون إلى وجهاتهم في شوارع نيويورك المزدحمة.",
      instructions: "استخدم الأسهم للقيادة وتوقف عند المحطات."
  },
  "car-parking": {
      title: "جراج سيارات",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/car-parking.jpg",
      description: "اختبر مهاراتك في ركن السيارات بدقة.",
      instructions: "استخدم الأسهم لتحريك السيارة دون الاصطدام."
  },
  "indian-uphill-bus": {
      title: "باص الجبال",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/indian-uphill-bus.jpg",
      description: "قد الباص في المرتفعات وتجنب السقوط.",
      instructions: "استخدم الأسهم للتحكم في الباص."
  },
  "madalin-cars-multiplayer": {
      title: "سيارات مادلين",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/madalin-cars-multiplayer.jpg",
      description: "شارك في سباقات متعددة اللاعبين مع سيارات فائقة السرعة.",
      instructions: "استخدم الأسهم للتحكم وسيطر على السباق."
  },
  "grand-shift-auto": {
      title: "حرامي السيارات",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/grand-shift-auto.jpg",
      description: "انطلق في مغامرات حرامي السيارات في المدينة المفتوحة!",
      howToPlay: "استخدم الأسهم أو WASD للتحرك، والمسافة للقفز، والفأرة للتفاعل."
  },
  "miami-crime-simulator-3d": {
      title: "رجل المافيا",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/miami-crime-simulator-3d.jpg",
      description: "عش دور رجل العصابة في شوارع ميامي.",
      howToPlay: "تحكم باستخدام الأسهم أو WASD، واستخدم الفأرة للتصويب وإطلاق النار."
  },
  "krunker-io": {
      title: "كرانكر",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/krunker-io.jpg",
      description: "لعبة تصويب سريعة عبر الإنترنت مع لاعبين آخرين.",
      howToPlay: "استخدم الفأرة للتصويب والزر الأيسر لإطلاق النار، وWASD للحركة."
  },
  "sniper-mission-3d": {
      title: "مهمه قناص",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/sniper-mission-3d.jpg",
      description: "قم بمهام قنص دقيقة ضد الأعداء.",
      howToPlay: "استخدم الفأرة للتصويب، والنقر للإطلاق، وWASD للتحرك."
  },
  "valley-of-the-wolves": {
      title: "وادي الذئاب",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/valley-of-the-wolves.jpg",
      description: "حارب الأعداء في مغامرة مستوحاة من وادي الذئاب.",
      howToPlay: "استخدم لوحة المفاتيح والفأرة للعب."
 },
 "army-sniper": {
      title: "قناص الجنود",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/army-sniper.jpg",
      description: "كن قناص الجيش وخلص المهام الصعبة.",
      howToPlay: "تصويب بالفأرة، وحركة بلوحة المفاتيح."
  },
  "stupid-zombies": {
      title: "الزومبي الغبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/stupid-zombies.jpg",
      description: "اقضِ على الزومبي بتخطيط ذكي وطلقات محدودة.",
      howToPlay: "استخدم الفأرة لتوجيه الطلقات نحو الزومبي."
  },
  "smurphin-for-brooklyn": {
      title: "السنفور الغضبان",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/smurphin-for-brooklyn.jpg",
      description: "السنفور الغضبان يواجه التحديات في شوارع بروكلين.",
      howToPlay: "العب باستخدام لوحة المفاتيح وتخطى العقبات."
  },
  "red-monster": {
      title: "الوحش الاحمر",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/red-monster.jpg",
      description: "ساعد الوحش الأحمر في مواجهة أعدائه.",
      howToPlay: "تحكم فيه باستخدام الأسهم وتفادى العقبات."
      },
  "zombocalypse": {
      title: "قتال الزومبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/zombocalypse.jpg",
      description: "اقتُل موجات من الزومبي في معركة لا تنتهي.",
      howToPlay: "استخدم WASD للتحرك والمسافة للهجوم."
  },
  "mass-mayhem-4": {
      title: "الرجل الارهابي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/mass-mayhem-4.jpg",
      description: "فجر كل شيء في طريقك مع هذه اللعبة المجنونة.",
      howToPlay: "تحرك بالأسهم واستخدم الفأرة للهجوم."
  },
  "3-foot-ninja": {
      title: "فتي النينجا",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/3-foot-ninja.jpg",
      description: "قاتل الأعداء في مغامرات نينجا سريعة.",
      howToPlay: "استخدم لوحة المفاتيح لتنفيذ حركات النينجا."
  },
  "fantasy-sniper": {
      title: "قناص الخيال",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/fantasy-sniper.jpg",
      description: "استهدف المخلوقات الخيالية في عالم ملحمي.",
      howToPlay: "صوب باستخدام الفأرة وأطلق النار."
  },
  "slap-king": {
      title: "ضرب الكف",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg",
      description: "ادخل في منافسات الضرب بالكف وكن الملك!",
      howToPlay: "استخدم الفأرة لتوجيه الضربات في الوقت المناسب."
  },
  "the-first-date": {
      title: "الموعد الاول",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/the-first-date.jpg",
      description: "ساعد الشخصيتين في إنجاح أول موعد لهما.",
      howToPlay: "استخدم الفأرة للتفاعل مع الخيارات المختلفة."
  },
  "brucele-movie": {
      title: "البروسلي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/brucele-movie.jpg",
      description: "قاتل مثل بروسلي وتغلب على خصومك.",
      howToPlay: "تحكم بالحركات القتالية باستخدام لوحة المفاتيح."
  },
  "jail-break-rush": {
      title: "الهروب من السجن",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/jail-break-rush.jpg",
      description: "خطط لهروبك من السجن وتجنب الحراس.",
      howToPlay: "استخدم الأسهم للحركة وتجنب الكاميرات والعوائق."
  },
  "defend-your-castle": {
      title: "نعم و لا",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/defend-your-castle.jpg",
      description: "دافع عن القلعة بأي وسيلة ممكنة.",
      howToPlay: "استخدم الفأرة لرمي الأعداء بعيداً عن القلعة."
  },
  "save-them-goldfish": {
      title: "انقاذ السمك الذهبي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/save-them-goldfish.jpg",
      description: "أنقذ السمك الذهبي قبل أن ينفذ الوقت.",
      howToPlay: "استخدم الفأرة لنقل السمك إلى الأمان بسرعة."
  },
  "dream-chefs": {
      title: "شيفه الاحلام",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/dream-chefs.jpg",
      description: "ساعدي الشيفه في تحضير الأكلات وتقديم الطلبات للعملاء في أسرع وقت.",
      howToPlay: "استخدمي الماوس لاختيار الأدوات وتحضير الأكل."
  },
  "kakato-otoshi": {
      title: "الكعب العالي",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/kakato-otoshi.jpg",
      description: "تخلصي من الكعب العالي للوصول إلى الأرض بأمان.",
      howToPlay: "استخدمي الماوس أو لوحة المفاتيح لضرب الكعب وتقصيره."
  },
  "merge-cakes": {
      title: "دمج الكيك",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/merge-cakes.jpg",
      description: "ادمجي الكعكات المتشابهة للحصول على كعكة أكبر.",
      howToPlay: "انقري واسحبي الكعكات لدمجها مع بعض."
  },
  "funny-hair-salon": {
      title: "صالون حاقه",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/funny-hair-salon.jpg",
      description: "اصنعي تسريحات مضحكة وغريبة للزبائن في الصالون.",
      howToPlay: "استخدمي الأدوات المختلفة لقص وصبغ وتصفيف الشعر."
  },
    "wedding-shoppe": {
      title: "محل العرائس",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/wedding-shoppe.jpg",
      description: "اختاري أجمل الفساتين والإكسسوارات للعروسة في يومها الكبير.",
      howToPlay: "استخدمي الماوس لاختيار الملابس وتلبيس العروسة."
  },
  "baby-frozen-fun-day": {
      title: "يوم المرح",
      image: "https://cdn.ttt4.com/maher/images/thumbnail/baby-frozen-fun-day.jpg",
      description: "اقضي يومًا ممتعًا مع الطفلة الصغيرة في العديد من الأنشطة المرحة.",
      howToPlay: "اتبعي التعليمات على الشاشة للعب مع الطفلة والعناية بها."
  },
  "tom-and-jerry---cat-crossing": {
    title: "توم يعبر النهر",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/tom-and-jerry---cat-crossing.jpg",
    description: "ساعد توم في عبور النهر دون أن يسقط في الماء.",
    howToPlay: "استخدم الأسهم للتحكم في توم والقفز على الألواح العائمة."
  },
  "little-red-cap-differences": {
    title: "ليلي والذئب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/little-red-cap-differences.jpg",
    description: "اكتشف الفروقات بين الصور في قصة ليلي والذئب.",
    howToPlay: "انقر على الفروقات في الصورة بأسرع ما يمكن."
  },
  "duck-dodgers": {
    title: "البط المقاتل",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/duck-dodgers.jpg",
    description: "حارب الأعداء في الفضاء مع البط المقاتل.",
    howToPlay: "استخدم لوحة المفاتيح لإطلاق النار والتحرك."
  },
  "toy-shop": {
    title: "محل العاب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg",
    description: "قم بإدارة محل الألعاب وساعد الزبائن في شراء ألعابهم المفضلة.",
    howToPlay: "استخدم الماوس لتحديد الألعاب وتقديمها للعملاء."
  },
  "bunch-of-grapes": {
    title: "عنقود العنب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg",
    description: "ساعد في تجميع حبات العنب بطريقة صحيحة.",
    howToPlay: "انقر واسحب لربط العنب المتشابه معًا."
  },
  "monkey-lander": {
    title: "هبوط القرد",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/monkey-lander.jpg",
    description: "ساعد القرد في الهبوط الآمن على الكوكب.",
    howToPlay: "استخدم الأسهم لتوجيه المركبة وتجنب العقبات."
  },
  
  "tic-tac-toe": {
    title: "اكس او",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/tic-tac-toe.jpg",
    description: "العب لعبة إكس أو الكلاسيكية ضد الكمبيوتر أو صديق.",
    howToPlay: "انقر على الخانة المناسبة لوضع X أو O."
  },
  "candy-crush": {
    title: "كاندي كراش",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/candy-crush.jpg",
    description: "طابق الحلوى المتشابهة للحصول على نقاط عالية.",
    howToPlay: "اسحب الحلوى لتشكيل صفوف أو أعمدة من نفس النوع."
  },
  "tentrix": {
    title: "تن تربكس",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/tentrix.jpg",
    description: "قم بترتيب القطع على اللوحة لملء الصفوف والأعمدة.",
    howToPlay: "اسحب القطع وضعها في المكان المناسب لإكمال الخطوط."
  },
  "cannon-basketball-4": {
    title: "مدفع كرات السله",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/cannon-basketball-4.jpg",
    description: "أطلق الكرة من المدفع وحاول تسجيلها في السلة.",
    howToPlay: "اضبط الزاوية والقوة ثم اضغط للإطلاق."
  },
  "bubble-tower": {
    title: "برج الفقاعات",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/bubble-tower.jpg",
    description: "ابنِ برجًا من الفقاعات دون أن يسقط.",
    howToPlay: "انقر لإسقاط الفقاعات فوق بعضها البعض."
  },
  "pop-pop-candies": {
    title: "حلوي البوب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/pop-pop-candies.jpg",
    description: "فقع الحلوى المتشابهة لتفريغ الشاشة والحصول على النقاط.",
    howToPlay: "انقر على مجموعات الحلوى المتشابهة لتفجيرها."
  }, 
  "subway-surf": {
    title: "صب واي سيرف",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/subway-surf.jpg",
    description: "اهرب من المفتش والكلب في مغامرة لا نهائية على السكة الحديدية!",
    howToPlay: "استخدم الأسهم أو الماوس للقفز والانزلاق وتجنب العقبات."
  },
  "wormate-io": {
    title: "الدودة",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/wormate-io.jpg",
    description: "التهم الحلوى وكبر حجمك وتجنب الاصطدام بالديدان الأخرى!",
    howToPlay: "استخدم الماوس أو لوحة المفاتيح للتحكم في حركة الدودة."
  },
  "vex-3": {
    title: "فيكس 3",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/vex-3.jpg",
    description: "اقفز وتجاوز العقبات في مغامرة منصات مليئة بالتحديات.",
    howToPlay: "استخدم الأسهم أو WASD للتحرك والقفز."
  },
  "cut-the-rope-2": {
    title: "اقطع الحبل",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/cut-the-rope-2.jpg",
    description: "ساعد أوم نوم في الوصول إلى الحلوى عن طريق قطع الحبال بحكمة.",
    howToPlay: "استخدم الماوس لقطع الحبال والتفاعل مع العناصر في البيئة."
  },
  "archery-world-tour": {
    title: "القوس والسهم",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/archery-world-tour.jpg",
    description: "اختبر مهاراتك في الرماية بالقوس في جولات متعددة حول العالم.",
    howToPlay: "استخدم الماوس لتحديد الزاوية والقوة، ثم أطلق السهم."
  },
  "running-man": {
    title: "الرجل الراكض",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/vex-3.jpg",
    description: "اركض بأقصى سرعة وتجاوز جميع العقبات في طريقك.",
    howToPlay: "تحكم في الحركة بالقفز والانزلاق لتجنب الحواجز."
  },
  "football-masters": {
    title: "سيد كره القدم",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/football-masters.jpg",
    description: "العب مباريات سريعة أو بطولات في كرة القدم مع لاعبين خارقين.",
    howToPlay: "استخدم الأسهم للتحرك و Z/X للتسديد والتمرير."
  },
  "celebrity-fight-club": {
    title: "نادي الملاكمة",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/celebrity-fight-club.jpg",
    description: "قاتل نجوم العالم في مباريات ملاكمة شرسة!",
    howToPlay: "استخدم الأسهم للضرب والتحرك، و Space للدفاع."
  },
  "penalty-shootout-euro-cup-2016": {
    title: "دوري الضربات الحرة",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/penalty-shootout-euro-cup-2016.jpg",
    description: "خض تجربة تصدي أو تسديد ركلات الجزاء في البطولة الأوروبية.",
    howToPlay: "انقر واسحب لتحديد اتجاه وقوة الضربة."
  },
  "basketball-stars": {
    title: "نجوم كره السله",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/basketball-stars.jpg",
    description: "اختر نجمك المفضل والعب مباريات كرة سلة ثنائية!",
    howToPlay: "استخدم الأسهم وZ/X للتسديد والمراوغة."
  },
  "penalty-kicks": {
    title: "ضربات جزاء",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/penalty-kicks.jpg",
    description: "تنافس في تنفيذ وتصدي ضربات الجزاء.",
    howToPlay: "اختر الزاوية والوقت المناسب للتسديد أو التصدي."
  },
  "mini-pool": {
    title: "بلياردو",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/mini-pool.jpg",
    description: "العب البلياردو على طاولة مصغّرة بأسلوب ممتع.",
    howToPlay: "استخدم الماوس لتوجيه العصا وتحديد القوة."
  },
  "arabic-questions": {
    title: "اسئله عن الرياضه",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/arabic-questions.jpg",
    description: "اختبر معلوماتك الرياضية من خلال أسئلة ممتعة.",
    howToPlay: "اختر الإجابة الصحيحة من بين الخيارات المعروضة."
  },
  "mini-putt": {
    title: "جولف",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/mini-putt.jpg",
    description: "حاول إدخال الكرة في الحفرة بأقل عدد ضربات.",
    howToPlay: "استخدم الماوس لتحديد الاتجاه والقوة."
  },
  "pinch-hitter": {
    title: "بيسبول",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/pinch-hitter.jpg",
    description: "أظهر مهاراتك في ضرب كرات البيسبول بدقة.",
    howToPlay: "اضغط Space في الوقت المناسب لضرب الكرة."
  },
  "slap-king": {
    title: "ضرب الكف",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/slap-king.jpg",
    description: "ادخل في معركة ضرب الكف وحاول أن تسقط خصمك بأقوى ضربة.",
    howToPlay: "اضغط في الوقت المناسب لتنفيذ الضربة."
  },
  "vex-3": {
    title: "الرجل الراكض",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/vex-3.jpg",
    description: "تحدى العقبات واجتز المراحل بحركات باركور مثيرة.",
    howToPlay: "استخدم الأسهم للتحرك والقفز وتسلق الجدران."
  },
  "penalty-kicks": {
    title: "ضربات جزاء",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/penalty-kicks.jpg",
    description: "سدد ضربات الجزاء بدقة للفوز بالمباراة.",
    howToPlay: "استخدم الماوس لتحديد اتجاه وقوة التسديدة."
  },
  "candy-crush": {
    title: "كاندي كراش",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/candy-crush.jpg",
    description: "قم بترتيب الحلوى المتشابهة للحصول على أعلى النقاط.",
    howToPlay: "انقر واسحب الحلوى لتبديل أماكنها وتحقيق التطابق."
  },
  "tentrix": {
    title: "تن تربكس",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/tentrix.jpg",
    description: "املأ الصفوف بالأشكال لتفجيرها وكسب النقاط.",
    howToPlay: "اسحب الأشكال إلى اللوحة ورتبها بذكاء."
  },
  "toy-shop": {
    title: "محل العاب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/toy-shop.jpg",
    description: "رتب الألعاب في المحل لجذب الزبائن وزيادة الأرباح.",
    howToPlay: "استخدم الماوس لوضع الألعاب في أماكنها الصحيحة."
  },
  "bunch-of-grapes": {
    title: "عنقود العنب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/bunch-of-grapes.jpg",
    description: "اجمع حبات العنب المتشابهة قبل نفاد الوقت.",
    howToPlay: "انقر على العنب المطابق للحصول على نقاط."
  },
  "warfare-1917": {
    title: "حرب",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/warfare-1917.jpg",
    description: "قد جيشك في معركة شرسة في الحرب العالمية الأولى.",
    howToPlay: "استخدم الماوس لاختيار الجنود وإرسالهم إلى المعركة."
  },
  "tanks-battle": {
    title: "حرب الدبابات",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/tanks-battle.jpg",
    description: "قاتل باستخدام دبابتك وقم بتدمير الأعداء في ساحة المعركة.",
    howToPlay: "تحكم بالدبابة باستخدام الأسهم وأطلق النار بالماوس."
  },
  "mexico-rex": {
    title: "ديناصور المكسيك",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/mexico-rex.jpg",
    description: "اقتحم المدينة بديناصور شرس ودمر كل شيء في طريقك.",
    howToPlay: "استخدم الأسهم للتحرك والمسطرة للهجوم."
  },
  "zombs-royale": {
    title: "زومبي رويال",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/zombs-royale.jpg",
    description: "ادخل في معركة ملكية ضد لاعبين آخرين وابقَ آخر من ينجو.",
    howToPlay: "استخدم لوحة المفاتيح والماوس للتنقل والتصويب."
  },
  "zombie-hunters": {
    title: "صيادو الزومبي",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/zombie-hunters.jpg",
    description: "تعاون مع فريقك للقضاء على موجات الزومبي.",
    howToPlay: "استخدم WASD للتحرك، والماوس للتصويب وإطلاق النار."
  },
  "battle-coast": {
    title: "معركه الساحل",
    image: "https://cdn.ttt4.com/maher/images/thumbnail/battle-coast.jpg",
    description: "دافع عن الساحل من الأعداء باستخدام المدافع الثقيلة.",
    howToPlay: "استخدم الماوس لتحديد الهدف وإطلاق النار."
  }
};
  
  // الحصول على اسم اللعبة من الرابط
  const urlParams = new URLSearchParams(window.location.search);
  const gameId = urlParams.get("id");
  const game = games[gameId];
  
  // عرض البيانات
  if (game) {
    document.getElementById("game-title").textContent = game.title;
    document.getElementById("game-image").src = game.image;
    document.getElementById("game-description").textContent = game.description;
    document.getElementById("game-controls").textContent = game.controls;
  } else {
    document.querySelector(".game-details").innerHTML = "<p>اللعبة غير موجودة</p>";
  }

  