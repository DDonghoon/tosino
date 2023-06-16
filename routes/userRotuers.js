const express = require('express');
const router = express.Router();
const sequelize = require("sequelize");
const Serializer = require('sequelize-to-json')
const Op = sequelize.Op;
const cookieParser = require("cookie-parser");
const bcrypt = require('bcrypt');
const session = require('express-session');
const MemoryStore = require('memorystore')(session);
const {QueryTypes, where} = require("sequelize");
const moment = require("moment");

const {sessionCheck, sessionEmpCheck} = require('../../controller/sessionCtl');

const models = require("../../models/index");
const {
    product,
    airplane,
    tour,
    hotel,
    rentcar,
    pairstatus,
    ptourstatus,
    photelstatus,
    prentstatus,
    user,
} = require('../../models/index');

const fs = require('fs');
const querystring = require('querystring');
const crypto = require('crypto'); //추가됐음
const {getPagingData, getPagingDataCount, getPagination} = require('../../controller/pagination');
const {makePassword, comparePassword} = require('../../controller/passwordCheckUtil');
const {fixed} = require("lodash/fp/_falseOptions");
const path = require("path");
const bodyParser = require('body-parser');
const parser = bodyParser.urlencoded({extended: false});


const {upload, uploadMultiFiles} = require("../../controller/fileupload");
const passport = require("passport");
const {isLoggedIn, isNotLoggedIn, saveReferer} = require("../../middlewares");
const {viewedProducts,viewedProductsList} = require("../../controller/userRoutesContorller");

router.use((req, res, next)=>{
    res.locals.user = req.user;
    next();
});

const logger = require('../../winston')('server');
 

logger.error('winston error log test');


const productCurrent = async (productId)=>{
    const productL = await product.findOne({
        attributes: ['id','pname','ppic'],
        where: {
            id: productId
        }
    });
    logger.info('productCurrent->',productL.ppic);
    return productL;
}
// const {count: totalItems, rows: tutorials} = countlist;







// 회원가입
router.get('/tourlandRegister', function (req, res, next) {

    let {searchType, keyword, keyword2} = req.query;
    let searchkeyword = keyword;

    res.render("user/tourlandRegisterForm", {searchkeyword});
});


// 회원가입 전송
router.post('/tourlandRegister', async (req, res, next) => {
    let query;
    console.log("register->", req.body);

    // Check if the email is already in use
    let userExists = await models.user.findOne({
        raw: true,
        where: {
            userid: req.body.userid
        }
    });

    if (userExists) {
        res.status(401).json({message: "User is is already in use."});
        return;
    }

    // Define salt rounds
    const saltRounds = 10;
    // Hash password
    bcrypt.hash(req.body.userpass, saltRounds, (err, hash) => {
        if (err) throw new Error("Internal Server Error");

        req.body.userpass = hash;

        const user = models.user.create(req.body);
        query = querystring.stringify({
            "registerSuccess": true,
            "id": user.userid
        });
        res.redirect('/customer/loginForm/?' + query);
    });

});

// id check
router.get('/idCheck/:userid', async (req, res, next) => {

    const userid = req.params.userid;

    try {
        let checkUserid = await models.user.findOne({
            raw: true,
            attributes: ['userid','usersecess'],
            where: {
                userid: userid
            }
        })

        console.log("idCheck---->", checkUserid);

        if (checkUserid !== null){
            console.log("check->", checkUserid.userid);
            if (checkUserid.userid != null) {
                res.status(201).send("exist");
            }
            else if(checkUserid.usersecess == 0) {
                res.status(202).send("usersecess");
            }else{
                
            }
        }else{
            res.status(200).send("notexist");
        }
    } catch (e) {
        console.error(e);
        next(e);
    }

});

// 회원의 비밀번호 확인
router.post('/EditPasswordCheck', async (req, res, next) => {

        const {userid, checkPass} = req.body;

        try {
            let checkUserid = await models.user.findOne({
                raw: true,
                attributes: ['userid', 'userpass'],
                where: {
                    userid: userid
                }
            });

            if (checkUserid) {
                bcrypt.compare(checkPass, checkUserid.userpass, (err, result) => {

                    res.status(201).json("Pass");

                });
            } else {
                res.status(301).json("NoPass");

            }
        } catch
            (e) {
            console.error(e);
            next(e);
        }

    }
)
;