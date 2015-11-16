var app  = angular.module('TrelloOffice', []); 

app.provider('members', function () {
    var memberID = '';
    return {
        setMemberID: function  (id) {
            memberID  = id;
        },
        $get: function () {
            return {
                member: 'Member: ' + ' ' + memberID
            }
        }
    }
}) 


app.config(function(membersProvider) {
    membersProvider.setMemberID('22');   
});

app.controller('AngularOneMemberController',['members', function(member) {
    console.log(member.memberID);
}])
