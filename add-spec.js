describe('add', function () {
    var add;
    beforeEach(function () {
        add = require('./add');
    });
    it('is a function', function () {
        console.assert(typeof add === 'function');
    });
    it('is equal', function () {
        console.assert( add(1,2) === 4);
    });
});
