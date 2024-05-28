console.log();
// A. String
console.log("A. String");
console.log();

// Jawaban Soal 1
console.log(">> Soal 1 <<");

var word = "JavaScript";
var second = "is";
var third = "awesome";
var fourth = "and";
var fifth = "I";
var sixth = "love";
var seventh = "it!";

var sentence1 =
  word +
  " " +
  second +
  " " +
  third +
  " " +
  fourth +
  " " +
  fifth +
  " " +
  sixth +
  " " +
  seventh;

console.log(sentence1);

console.log();

// Jawaban Soal 2
console.log(">> Soal 2 <<");

var sentence2 = "I am going to be Web Developer";

var FirstWord2 = sentence2[0];
var secondWord2 = sentence2[2] + sentence2[3];
var thirdWord2 = sentence2.slice(5, 10);
var fourthWord2 = sentence2.slice(11, 13);
var fifthWord2 = sentence2.slice(14, 16);
var sixthWord2 = sentence2.slice(17, 20);
var seventhWord2 = sentence2.slice(21);

console.log("First word: " + FirstWord2);
console.log("Second word: " + secondWord2);
console.log("Third word: " + thirdWord2);
console.log("Fourth word: " + fourthWord2);
console.log("Fifth word: " + fifthWord2);
console.log("Sixth word: " + sixthWord2);
console.log("Seventh word: " + seventhWord2);

console.log();

// Jawaban oal 3
console.log(">> Soal 3 <<");

var sentence3 = "wow JavaScript is so cool";

var FirstWord3 = sentence3.substring(0, 3);
var secondWord3 = sentence3.substring(4, 14);
var thirdWord3 = sentence3.substring(15, 17);
var fourthWord3 = sentence3.substring(18, 20);
var fifthWord3 = sentence3.substring(21, 25);

console.log(
  "First Word: " + FirstWord3 + ", with length: " + FirstWord3.length
);
console.log(
  "Second Word: " + secondWord3 + ", with length: " + secondWord3.length
);
console.log(
  "Third Word: " + thirdWord3 + ", with length: " + thirdWord3.length
);
console.log(
  "Fourth Word: " + fourthWord3 + ", with length: " + fourthWord3.length
);
console.log(
  "Fifth Word: " + fifthWord3 + ", with length: " + fifthWord3.length
);

console.log();

// B. Function
console.log("B. Function");
console.log();

// Jawaban Soal 1
console.log(">> Soal 1 <<");

function teriak() {
  return "Halo Sanbers!";
}

console.log(teriak());

console.log();

// Jawaban Soal 2
console.log(">> Soal 2 <<");

function kalikan(num1, num2) {
  return num1 * num2;
}

console.log(kalikan(4, 12));

console.log();

// Jawaban Soal 3
console.log(">> Soal 3 <<");

function introduce(name, age, address, hobby) {
  return (
    "Nama saya " +
    name +
    ", umur " +
    age +
    " tahun, alamat di " +
    address +
    ", dan hobby saya yaitu " +
    hobby +
    "!"
  );
}

console.log(introduce("Farel", 22, "Pekanbaru", "Tidur"));

console.log();

// C. Conditional
console.log("C. Conditional");
console.log();

var nama = "John";
var peran = "";

if (nama === "") {
  console.log("Nama harus diisi!");
} else if (peran === "") {
  console.log("Halo " + nama + ", Pilih peranmu untuk memulai game!");
} else {
  console.log("Selamat datang di Dunia Werewolf, " + nama);
  if (peran === "Penyihir") {
    console.log(
      "Halo Penyihir " +
        nama +
        ", kamu dapat melihat siapa yang menjadi werewolf!"
    );
  } else if (peran === "Guard") {
    console.log(
      "Halo Guard " +
        nama +
        ", kamu akan membantu melindungi temanmu dari serangan werewolf."
    );
  } else if (peran === "Werewolf") {
    console.log(
      "Halo Werewolf " + nama + ", Kamu akan memakan mangsa setiap malam!"
    );
  }
}

console.log();

// D. Looping
console.log("D. Looping");
console.log();
console.log("file: looping.js");
