const Sequelize =  require('sequelize');

module.exports = class User extends Sequelize.Model{
    static init(sequelize){
        return super.init({
            mb_id: {
                autoIncrement: true,
                type: DataTypes.INTEGER,
                allowNull: false,
                primaryKey: true,
                comment: "유저번호"
            },
            mb_username: {
                type: DataTypes.STRING(5),
                allowNull: true,
                comment: "유저명"
            },
            mb_usertel: {
                type: DataTypes.CHAR(13),
                allowNull: true,
                comment: "전화번호"
            },
            mb_accountholder: {
                type: DataTypes.CHAR(13),
                allowNull: true,
                comment: "유저닉네임"
            },
            mb_userid: {
                type: DataTypes.STRING(12),
                allowNull: true,
                comment: "유저아이디"
            },
            mb_userpassword: {
                type: DataTypes.STRING(512),
                allowNull: true,
                comment: "유저비밀번호"
            },
            
            mb_accountholder: {
                type: DataTypes.CHAR(13),
                allowNull: true,
                comment: "예금주"
            },
            mb_accountnum: {
                type: DataTypes.CHAR(15),
                allowNull: true,
                comment: "계좌번호"
            },
           
            mb_bank: {
                type: DataTypes.CHAR(13),
                allowNull: true,
                comment: "은행명"
            },
        });
    }
    static associate(db) {}
};