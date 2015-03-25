package com.springapp.server;

import com.springapp.model.TestEntity;
import org.hibernate.Criteria;
import org.hibernate.SessionFactory;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

/**
 * Created by User on 24.03.2015.
 */
@Repository
public class DaoImpl implements com.springapp.server.Dao {
    private SessionFactory sessionFactory;

    public DaoImpl(SessionFactory sessionFactory) {
        this.sessionFactory = sessionFactory;
    }
    public DaoImpl(){}
    @Override
    @Transactional
    public List<TestEntity> getList() {
        List<TestEntity> listUser = (List<TestEntity>) sessionFactory.getCurrentSession()
                .createCriteria(TestEntity.class)
                .setResultTransformer(Criteria.DISTINCT_ROOT_ENTITY).list();
        return listUser;
    }
}