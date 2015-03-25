package com.springapp.server;

import com.springapp.model.TestEntity;

import java.util.List;

/**
 * Created by User on 24.03.2015.
 */
public interface Dao {
    public List<TestEntity> getList();
}
