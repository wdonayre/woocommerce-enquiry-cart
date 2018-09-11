export class WD {
    private _name = '';
    private _age = 0;

    constructor(name: string) {
      this._name = name;
    }

    get name() {
      return this._name;
    }

    set name(value: string) {
      this._name = value;
    }

}