// in funktionierender Ausführung in Kapitel 09 Listing 05 einfügen/eingefügt
import Calculator from "./calculator";

describe("Calculator", () => {
  describe("add and degreetofahrenheit", () => {
    let calculator: Calculator;
    beforeEach(() => {
      calculator = new Calculator();
    });

    it("should add 1 and 1 and return 2", () => {
      const result = calculator.add(1, 1);
      expect(result).toBe(2);
    });

    it("should add -1 and 1 and return 0", () => {
      const result = calculator.add(-1, 1);
      expect(result).toBe(0);
    });
    it("should convert 0 to return 32", () => {
      const result = calculator.degreetofahrenheit(0);
      expect(result).toBeCloseTo(32);
    });
    it("should convert 5 to return 41", () => {
      const result = calculator.degreetofahrenheit(5);
      expect(result).toBeCloseTo(41);
    });
    it("should convert 2 to return 35,6", () => {
      const result = calculator.degreetofahrenheit(2);
      expect(result).toBeCloseTo(35.6);
    });
  });
});
