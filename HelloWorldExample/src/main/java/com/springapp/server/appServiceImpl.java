package com.springapp.server;

import com.springapp.client.appService;
import com.springapp.model.TestEntity;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

/**
 * Created by User on 23.03.2015.
 */
@Service
public class appServiceImpl implements appService {
    String text;
    @Autowired
    com.springapp.server.DaoImpl dao;
    @Override
    public String print() {
        List<TestEntity> list= dao.getList();
        if (list == null){
            text = "Error";
        }
        if (list.isEmpty()){
            text = "no data";
        }
        else {
            text = dao.getList().get(0).getText();
        }
        return text;
    }
}